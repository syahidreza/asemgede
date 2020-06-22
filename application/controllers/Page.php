<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function index()
	{
		$data['title'] = "Home";
		$this->load->view('user/start', $data);
		$this->load->view('user/home');
		$this->load->view('user/end');
	}

	public function home()
	{
		$data['title'] = "Home";
		$this->load->view('user/start', $data);
		$this->load->view('user/home');
		$this->load->view('user/end');
	}

	public function profile()
	{
		$data['title'] = "Profile";

		$this->load->model('ModelProfile');
		$data['profile'] = $this->ModelProfile->getProfile();

		$this->load->view('user/start', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('user/end');
	}

	public function daftar()
	{
		$data['title'] = "Pendaftaran";

		$this->load->model('ModelPendaftaran');

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required');
    $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric');
		$this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|numeric');
		$this->form_validation->set_rules('divisi', 'Divisi', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if($this->form_validation->run() == False) {
      $this->load->view('user/start', $data);
			$this->load->view('user/pendaftaran');
			$this->load->view('user/end');
    } else {
      $this->ModelPendaftaran->insertPendaftaran();
      $this->session->set_flashdata('flash', 'Data tersimpan. Anda berhasil mendaftar sebagai peserta kursus.');
      redirect('page/pembayaran');
    }		
	}

	public function pembayaran()
	{
		$data['title'] = "Pembayaran";
		$this->load->view('user/start', $data);
		$this->load->view('user/pembayaran');
		$this->load->view('user/end');
	}

	
}
