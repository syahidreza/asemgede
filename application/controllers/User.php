<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
    $data['title'] = "Dashboard";

    $this->load->model('ModelPeserta');
    $data['peserta'] = $this->ModelPeserta->getPeserta($this->session->id);

		$this->load->view('user/start', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/end');
	}

	public function dashboard()
	{
    $data['title'] = "Dashboard";
    $this->load->model('ModelPeserta');
    $data['peserta'] = $this->ModelPeserta->getPeserta($this->session->id);

		$this->load->view('user/start', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/end');
	}

	public function login()
	{
		$data['title'] = "Login User";

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		if ($this->form_validation->run() == false) {
			$this->load->view('user/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('peserta', ['username' => $username, 'password' => $password])->row_array();

    if ($user) {
      $data = [
        'id' 			 => $user['id'],
        'username' => $user['username']
      ];
      $this->session->set_userdata($data);
      redirect('user/dashboard');
    } else {
      $this->session->set_flashdata('flash', 'Username / Password salah');
      redirect('user/login');
    }
	}

	public function logout()  {
    
    $this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		
    redirect('user/login');
  }
	
	public function profile() {
		$data['title'] = "Profil";
    $this->load->model('ModelPeserta');
		$data['peserta'] = $this->ModelPeserta->getPeserta($this->session->id);
		
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('no_hp', 'No. HP', 'required');
		$this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas / Tingkat', 'required');
		$this->form_validation->set_rules('divisi', 'Divisi', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if($this->form_validation->run() == False) {
			$this->load->view('user/start', $data);
			$this->load->view('user/profile', $data);
			$this->load->view('user/end');
		} else {
			$this->ModelPeserta->updatePeserta($this->session->id);
			$this->session->set_flashdata('flash', 'Profil berhasil diubah');
			redirect('user/profile');
		}
	}
}
