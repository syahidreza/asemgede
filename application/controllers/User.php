<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
    $data['title'] = "Dashboard";
		$this->load->view('admin/start', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/end');
	}

	public function dashboard()
	{
    $data['title'] = "Dashboard";
		$this->load->view('admin/start', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/end');
	}

	public function login()
	{
		$data['title'] = "Login User";

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $admin = $this->db->get_where('admin', ['username' => $username, 'password' => $password])->row_array();

    if ($admin) {
      $data = [
        'id' 			 => $admin['id'],
        'username' => $admin['username']
      ];
      $this->session->set_userdata($data);
      redirect('admin/dashboard');
    } else {
      $this->session->set_flashdata('flash', 'Username / Password salah');
      redirect('admin/login');
    }
  }
}
