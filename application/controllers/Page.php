<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index()
	{
		$data['title'] = "Home";
		$this->load->view('public/start', $data);
		$this->load->view('public/home');
		$this->load->view('public/end');
	}

	public function home()
	{
		$data['title'] = "Home";
		$this->load->view('public/start', $data);
		$this->load->view('public/home');
		$this->load->view('public/end');
	}

	public function profile()
	{
		$data['title'] = "Profile";

		$this->load->model('ModelProfile');
		$data['profile'] = $this->ModelProfile->getProfile();

		$this->load->view('public/start', $data);
		$this->load->view('public/profile', $data);
		$this->load->view('public/end');
	}

	public function daftar()
	{
		$data['title'] = "Pendaftaran";

		$this->load->model('ModelPendaftaran');

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric');
		$this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|numeric');
		$this->form_validation->set_rules('divisi', 'Divisi', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if($this->form_validation->run() == False) {
      $this->load->view('public/start', $data);
			$this->load->view('public/pendaftaran');
			$this->load->view('public/end');
    } else {
      $this->ModelPendaftaran->insertPendaftaran();
      $this->session->set_flashdata('flash', 'Data tersimpan. Anda berhasil mendaftar sebagai peserta kursus.');
      redirect('page/pembayaran');
    }		
	}

	public function pembayaran()
	{
		$data['title'] = "Pembayaran";

		$this->load->model('ModelProfile');
		$data['profile'] = $this->ModelProfile->getProfile();

		$this->load->view('public/start', $data);
		$this->load->view('public/pembayaran', $data);
		$this->load->view('public/end');
	}

	
}
