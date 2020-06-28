<?php
class ModelPeserta extends CI_model {

  public function getAllPeserta(){
      return $this->db->get('peserta')->result_array();
  }

  public function getPeserta($id){
    return $this->db->get_where('peserta', ['id' => $id])->row_array();
  }

  public function updatePeserta($id) {
    $data = [
      "nama_lengkap"    => $this->input->post('nama_lengkap', true),
      "nama_panggilan"  => $this->input->post('nama_panggilan', true),
      "jk"              => $this->input->post('jk', true),
      "tmpt_lahir"      => $this->input->post('tmpt_lahir', true),
      "tgl_lahir"       => $this->input->post('tgl_lahir', true),
      "no_hp"           => $this->input->post('no_hp', true),
      "sekolah"         => $this->input->post('sekolah', true),
      "kelas"           => $this->input->post('kelas', true),
      "divisi"          => $this->input->post('divisi', true),
      "alamat"          => $this->input->post('alamat', true)
    ];

    $this->db->where('id', $id);
    $this->db->update('peserta', $data);
  }

  public function deletePeserta($id) {
    return $this->db->delete('peserta', ['id' => $id]);
  }

  public function gantiPass($id){
    $data = [
      "password" => $this->input->post('pw_baru', true),
    ];
    $this->db->where('id', $id);
    $this->db->update('peserta', $data);   
  }
}