<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		
	}

	public function index()
	{
		if (!$this->session->userdata('id_peserta')) {			
			redirect('user/login');
		}

    $data['title'] = "Dashboard";

    $this->load->model('ModelPeserta');
    $data['peserta'] = $this->ModelPeserta->getPeserta($this->session->id_peserta);

		$this->load->view('user/start', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/end');
	}

	public function dashboard()
	{

		if (!$this->session->userdata('id_peserta')) {			
			redirect('user/login');
		}

    $data['title'] = "Dashboard";
    $this->load->model('ModelPeserta');
    $data['peserta'] = $this->ModelPeserta->getPeserta($this->session->id_peserta);

		$this->load->view('user/start', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/end');
	}

	public function login()
	{
		if ($this->session->userdata('id_peserta')) {			
			redirect('user');
		}

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
        'id_peserta'	 => $user['id'],
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
    
    $this->session->unset_userdata('id_peserta');
		$this->session->unset_userdata('username');
		
    redirect('user/login');
  }
	
	public function profile() {
		if (!$this->session->userdata('id_peserta')) {			
			redirect('user/login');
		}

		$data['title'] = "Profil";
    $this->load->model('ModelPeserta');
		$data['peserta'] = $this->ModelPeserta->getPeserta($this->session->id_peserta);
		
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
			$this->ModelPeserta->updatePeserta($this->session->id_peserta);
			$this->session->set_flashdata('flash', 'Profil berhasil diubah');
			redirect('user/profile');
		}
	}
	public function gantiPass()
	{
		if (!$this->session->userdata('id_peserta')) {
      redirect('user/login');
    }
    
    $data['title'] = 'Ganti Password Peserta';
    $this->load->model('ModelPeserta');
    $data['peserta'] = $this->ModelPeserta->getPeserta($this->session->id_peserta);
    
    $this->form_validation->set_rules('pw_lama', 'Password Lama', 'required');
    $this->form_validation->set_rules('pw_baru', 'Password Baru', 'required');
    $this->form_validation->set_rules('konf_pw_baru', 'Konfirmasi Password Baru', 'required');

    if($this->form_validation->run() == false) {
      $this->load->view('user/start', $data);
      $this->load->view('user/ganti_pass', $data);
      $this->load->view('user/end');
    } else {
      $pw_lama = $this->input->post('pw_lama', true);
      $pw_baru = $this->input->post('pw_baru', true);
      $konf    = $this->input->post('konf_pw_baru', true);

      if ($pw_lama == $data['peserta']['password']) {
        if ($konf == $pw_baru) {
          $this->ModelPeserta->gantiPass($this->session->userdata('id_peserta'));
          $this->session->set_flashdata('flash', 'Password berhasil diganti.');
          redirect('user/gantiPass/');
        } else {
          $this->session->set_flashdata('flash', 'Password baru tidak sama.');
          redirect('user/gantiPass/');
        }
      } else {
        $this->session->set_flashdata('flash', 'Password lama salah.');
         redirect('user/gantiPass/');
      }
    }
	}
}
