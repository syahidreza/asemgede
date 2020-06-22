<?php
class ModelProfile extends CI_model {

  public function getProfile() {
    return $this->db->get('profile')->row_array();
  }

  public function updateProfile() {
    $data = [
      "sejarah" => $this->input->post('sejarah'),
      "visi"    => $this->input->post('visi'),
      "misi"    => $this->input->post('misi'),
      "no_hp"   => $this->input->post('no_hp', true),
      "email"   => $this->input->post('email', true),
      "alamat"  => $this->input->post('alamat')
    ];

    
    $this->db->where('id', 1);
    $this->db->update('profile', $data);
  }
}
