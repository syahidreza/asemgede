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
}
