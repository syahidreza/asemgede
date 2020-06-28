<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		$data['title'] = "Login Admin";

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

	public function profile()
	{
		$data['title'] = "Profile";
		
		$this->load->model('ModelProfile');
		$data['profile'] = $this->ModelProfile->getProfile();

		$this->form_validation->set_rules('sejarah', 'Sejarah', 'required');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
		$this->form_validation->set_rules('fungsi', 'Fungsi', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required');
		$this->form_validation->set_rules('no_rek', 'No. Rekening', 'required');
		$this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required');
		
		if($this->form_validation->run() == False) {
			$this->load->view('admin/start', $data);
			$this->load->view('admin/profile', $data);
			$this->load->view('admin/end');
		} else {
			$this->ModelProfile->updateProfile();
			$this->session->set_flashdata('flash', 'Profile berhasil diubah');
			redirect('admin/profile');
		}
		
	}

	public function galeri()
	{
		$data['title'] = "Galeri";
		
		$this->load->model('ModelGaleri');
		$data['galeri'] = $this->ModelGaleri->getAllGaleri();

		$this->load->view('admin/start', $data);
		$this->load->view('admin/galeri');
		$this->load->view('admin/end');
	}

	public function galeriTambah()
	{
		$data['title'] = "Tambah Galeri";

		$this->form_validation->set_rules('foto', 'Foto', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		
		
		if($this->form_validation->run() == False) {
			$this->load->view('admin/start', $data);
			$this->load->view('admin/galeri-tambah');
			$this->load->view('admin/end');
		} else {
			$this->ModelGaleri->insertGaleri();
			$this->session->set_flashdata('flash', 'Galeri berhasil ditambahkan.');
			redirect('admin/galeri');
		}

		
	}

	public function galeriEdit($id)
	{
		$data['title'] = "Edit Galeri";

		$this->load->model('ModelProfile');
		$data['galeri'] = $this->ModelGaleri->getGaleri($id);


		$this->form_validation->set_rules('foto', 'Foto', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		
		
		if($this->form_validation->run() == False) {
			$this->load->view('admin/start', $data);
			$this->load->view('admin/galeri-edit');
			$this->load->view('admin/end');
		} else {
			$this->ModelGaleri->insertGaleri();
			$this->session->set_flashdata('flash', 'Galeri berhasil diubah.');
			redirect('admin/galeri');
		}
	}

	public function galeriHapus($id)
	{
		$data['title'] = "Edit Galeri";
		$this->load->model('ModelGaleri');
		$this->ModelPeserta->deleteGaleri($id);

		$this->session->set_flashdata('flash', 'Berhasil menghapus galeri.');
		redirect('admin/galeri');
	}

	public function peserta()
	{
		$data['title'] = "Peserta Kursus";

		$this->load->model('ModelPeserta');
		
		$data['peserta'] = $this->ModelPeserta->getAllPeserta();

		$this->load->view('admin/start', $data);
		$this->load->view('admin/peserta', $data);
		$this->load->view('admin/end');
	}

	public function detailPeserta($id)
	{
		$data['title'] = "Detail Peserta";

		$this->load->model('ModelPeserta');
		
		$data['peserta'] = $this->ModelPeserta->getPeserta($id);

		$this->load->view('admin/start', $data);
		$this->load->view('admin/peserta-detail', $data);
		$this->load->view('admin/end');
	}

	public function delPeserta($id){
		$this->load->model('ModelPeserta');
		$this->ModelPeserta->deletePeserta($id);

		$this->session->set_flashdata('flash', 'Berhasil menghapus peserta.');
		redirect('admin/peserta');
	}

	public function pendaftaran()
	{
		$data['title'] = "Pendaftaran";

		$this->load->model('ModelPendaftaran');
		
		$data['pendaftaran'] = $this->ModelPendaftaran->getAllPendaftaran();

		$this->load->view('admin/start', $data);
		$this->load->view('admin/pendaftaran', $data);
		$this->load->view('admin/end');
	}

	public function detailPendaftaran($id)
	{
		$data['title'] = "Detail Pendaftaran";

		$this->load->model('ModelPendaftaran');
		
		$data['pendaftar'] = $this->ModelPendaftaran->getPendaftaran($id);

		$this->load->view('admin/start', $data);
		$this->load->view('admin/pendaftaran-detail', $data);
		$this->load->view('admin/end');
	}

	public function verifikasi($id){
		$this->load->model('ModelPendaftaran');
		$this->ModelPendaftaran->verifikasiPendaftaran($id);

		$this->session->set_flashdata('flash', 'Berhasil memverifikasi, pendaftar kini telah menjadi peserta kursus.');
		redirect('admin/pendaftaran');
	}

	public function delPendaftar($id){
		$this->load->model('ModelPendaftaran');
		$this->ModelPendaftaran->deletePendaftaran($id);

		$this->session->set_flashdata('flash', 'Berhasil menghapus pendaftar.');
		redirect('admin/pendaftaran');
	}

	public function laporan()
	{
    $data['title'] = "Laporan";
		$this->load->view('admin/start', $data);
		$this->load->view('admin/laporan');
		$this->load->view('admin/end');
	}
}
