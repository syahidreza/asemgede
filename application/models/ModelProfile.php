<?php
class ModelProfile extends CI_model {

  public function getProfile() {
    return $this->db->get('profile')->row_array();
  }

  public function updateProfile() {
    $data = [
      "sejarah"   => $this->input->post('sejarah'),
      "tujuan"    => $this->input->post('tujuan'),
      "fungsi"    => $this->input->post('fungsi'),
      "no_hp"     => $this->input->post('no_hp', true),
      "email"     => $this->input->post('email', true),
      "alamat"    => $this->input->post('alamat'),
      "nama_bank" => $this->input->post('nama_bank'),
      "no_rek"    => $this->input->post('no_rek'),
      "atas_nama" => $this->input->post('atas_nama')
    ];

    
    $this->db->where('id', 1);
    $this->db->update('profile', $data);
  }
}
