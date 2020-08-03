<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']    = "Dashboard";
		$this->load->view('admin/start', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/end');
	}

	public function dashboard()
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']    = "Dashboard";
		$this->load->view('admin/start', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/end');
	}

	public function login()
	{
		if ($this->session->userdata('id_admin')) {
			redirect('admin');
		}

		$data['title']    = "Login Admin";

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username   = $this->input->post('username');
		$password   = $this->input->post('password');

		$admin      = $this->db->get_where('admin', ['username' => $username, 'password' => $password])->row_array();

		if ($admin) {
			$data = [
				'id_admin' => $admin['id'],
				'username' => $admin['username']
			];
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('flash', 'Username / Password salah');
			redirect('admin/login');
		}
	}

	public function logout()
	{

		$this->session->unset_userdata('id_admin');
		$this->session->unset_userdata('username');

		redirect('admin/login');
	}

	public function profile()
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']    = "Profile";

		$this->load->model('ModelProfile');
		$data['profile']  = $this->ModelProfile->getProfile();

		$this->form_validation->set_rules('sejarah', 'Sejarah', 'required');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
		$this->form_validation->set_rules('fungsi', 'Fungsi', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required');
		$this->form_validation->set_rules('no_rek', 'No. Rekening', 'required');
		$this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required');

		if ($this->form_validation->run() == False) {
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
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']    = "Galeri";

		$this->load->model('ModelGaleri');
		$data['galeri']   = $this->ModelGaleri->getAllGaleri();

		$this->load->view('admin/start', $data);
		$this->load->view('admin/galeri');
		$this->load->view('admin/end');
	}

	public function galeriTambah()
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']            = "Tambah Galeri";
		$this->load->model('ModelGaleri');

		// $this->form_validation->set_rules('foto', 'Foto', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');


		if ($this->form_validation->run() == False) {
			$this->load->view('admin/start', $data);
			$this->load->view('admin/galeri-tambah');
			$this->load->view('admin/end');
		} else {
			$config['upload_path']   = './upload/galeri/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name']     = mt_rand(00000, 99999);
			$config['overwrite']     = true;
			$config['max_size']      = 1024;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$this->ModelGaleri->insertGaleri();
				$this->session->set_flashdata('flash', 'Galeri berhasil ditambahkan.');
				redirect('admin/galeri');
			}
		}
	}

	public function galeriEdit($id)
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']            = "Edit Galeri";

		$this->load->model('ModelGaleri');
		$data['galeri']           = $this->ModelGaleri->getGaleri($id);

		// $this->form_validation->set_rules('foto', 'Foto', 'isset');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == False) {
			$this->load->view('admin/start', $data);
			$this->load->view('admin/galeri-edit');
			$this->load->view('admin/end');
		} else {
			$config['upload_path']   = './upload/galeri/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name']     = $data['galeri']['foto'];
			$config['overwrite']     = true;
			$config['max_size']      = 1024;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$this->ModelGaleri->updateGaleri($id);
				$this->session->set_flashdata('flash', 'Galeri berhasil diubah.');
				redirect('admin/galeri');
			} else {
				$this->session->set_flashdata('flash', 'Galeri gagal diubah.');
				redirect('admin/galeri');
			}
		}
	}


	public function galeriHapus($id)
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']    = "Hapus Galeri";
		$this->load->model('ModelGaleri');
		$this->ModelGaleri->deleteGaleri($id);

		$this->session->set_flashdata('flash', 'Berhasil menghapus galeri.');
		redirect('admin/galeri');
	}

	public function peserta()
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']    = "Peserta Kursus";

		$this->load->model('ModelPeserta');

		$data['peserta']  = $this->ModelPeserta->getAllPeserta();

		$this->load->view('admin/start', $data);
		$this->load->view('admin/peserta', $data);
		$this->load->view('admin/end');
	}

	public function detailPeserta($id)
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']    = "Detail Peserta";

		$this->load->model('ModelPeserta');

		$data['peserta']  = $this->ModelPeserta->getPeserta($id);

		$this->load->view('admin/start', $data);
		$this->load->view('admin/peserta-detail', $data);
		$this->load->view('admin/end');
	}

	public function delPeserta($id)
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$this->load->model('ModelPeserta');
		$this->ModelPeserta->deletePeserta($id);

		$this->session->set_flashdata('flash', 'Berhasil menghapus peserta.');
		redirect('admin/peserta');
	}

	public function pendaftaran()
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']          = "Pendaftaran";

		$this->load->model('ModelPendaftaran');

		$data['pendaftaran']    = $this->ModelPendaftaran->getAllPendaftaran();

		$this->load->view('admin/start', $data);
		$this->load->view('admin/pendaftaran', $data);
		$this->load->view('admin/end');
	}

	public function detailPendaftaran($id)
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']        = "Detail Pendaftaran";

		$this->load->model('ModelPendaftaran');

		$data['pendaftar']    = $this->ModelPendaftaran->getPendaftaran($id);

		$this->load->view('admin/start', $data);
		$this->load->view('admin/pendaftaran-detail', $data);
		$this->load->view('admin/end');
	}

	public function verifikasi($id)
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$this->load->model('ModelPendaftaran');
		$this->ModelPendaftaran->verifikasiPendaftaran($id);

		$this->session->set_flashdata('flash', 'Berhasil memverifikasi, pendaftar kini telah menjadi peserta kursus.');
		redirect('admin/pendaftaran');
	}

	public function delPendaftar($id)
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$this->load->model('ModelPendaftaran');
		$this->ModelPendaftaran->deletePendaftaran($id);

		$this->session->set_flashdata('flash', 'Berhasil menghapus pendaftar.');
		redirect('admin/pendaftaran');
	}

	public function laporan()
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('admin/login');
		}

		$data['title']    = "Laporan";
		$this->load->view('admin/start', $data);
		$this->load->view('admin/laporan');
		$this->load->view('admin/end');
	}

	public function gantiPass()
	{
		if (!$this->session->userdata('id_admin')) {
			redirect('user/login');
		}

		$data['title']    = 'Ganti Password Admin';
		$this->load->model('ModelAdmin');
		$data['admin']    = $this->ModelAdmin->getAdmin($this->session->id_admin);

		$this->form_validation->set_rules('pw_lama', 'Password Lama', 'required');
		$this->form_validation->set_rules('pw_baru', 'Password Baru', 'required');
		$this->form_validation->set_rules('konf_pw_baru', 'Konfirmasi Password Baru', 'required');

		if (!$this->form_validation->run()) {
			$this->load->view('admin/start', $data);
			$this->load->view('admin/ganti_pass', $data);
			$this->load->view('admin/end');
		} else {
			$pw_lama   = $this->input->post('pw_lama', true);
			$pw_baru   = $this->input->post('pw_baru', true);
			$konf      = $this->input->post('konf_pw_baru', true);

			if ($pw_lama == $data['admin']['password']) {
				if ($konf == $pw_baru) {
					$this->ModelAdmin->gantiPass($this->session->userdata('id_admin'));
					$this->session->set_flashdata('flash', 'Password berhasil diganti.');
					redirect('admin/gantiPass/');
				} else {
					$this->session->set_flashdata('flash', 'Password baru tidak sama.');
					redirect('admin/gantiPass/');
				}
			} else {
				$this->session->set_flashdata('flash', 'Password lama salah.');
				redirect('admin/gantiPass/');
			}
		}
	}
}
