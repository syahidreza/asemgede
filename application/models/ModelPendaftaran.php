<?php
class ModelPendaftaran extends CI_model {

  public function getAllPendaftaran(){
      return $this->db->get('pendaftaran')->result_array();
  }

  public function getPendaftaran($id){
    return $this->db->get_where('pendaftaran', ['id' => $id])->row_array();
}
  
  public function insertPendaftaran(){
    $data = [
      "nama_lengkap"    => $this->input->post('nama_lengkap', true),
      "nama_panggilan"  => $this->input->post('nama_panggilan', true),
      "username"        => $this->input->post('username', true),
      "password"        => $this->input->post('password', true),
      "jk"              => $this->input->post('jk', true),
      "tmpt_lahir"      => $this->input->post('tmpt_lahir', true),
      "tgl_lahir"       => $this->input->post('tgl_lahir', true),
      "no_hp"           => $this->input->post('no_hp', true),
      "sekolah"         => $this->input->post('sekolah', true),
      "kelas"           => $this->input->post('kelas', true),
      "divisi"          => $this->input->post('divisi', true),
      "alamat"          => $this->input->post('alamat', true)
    ];

    $this->db->insert('pendaftaran', $data);
  }

  public function verifikasiPendaftaran($id){
    $pd = $this->getPendaftaran($id);

    $data = [
      "nama_lengkap"    => $pd['nama_lengkap'],
      "nama_panggilan"  => $pd['nama_panggilan'],
      "username"        => $pd['username'],
      "password"        => $pd['password'],
      "jk"              => $pd['jk'],
      "tmpt_lahir"      => $pd['tmpt_lahir'],
      "tgl_lahir"       => $pd['tgl_lahir'],
      "no_hp"           => $pd['no_hp'],
      "sekolah"         => $pd['sekolah'],
      "kelas"           => $pd['kelas'],
      "divisi"          => $pd['divisi'],
      "alamat"          => $pd['alamat']
    ];

    $this->db->insert('peserta', $data);
    $this->deletePendaftaran($id);
  }

  public function deletePendaftaran($id) {
    $this->db->delete('pendaftaran', ['id' => $id]);
  }
}