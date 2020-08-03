<?php

class ModelAdmin extends CI_Model {
  public function getAdmin($id) {
    return $this->db->get_where('admin', ['id' => $id])->row_array();
  }

  public function gantiPass($id) {
    $data = [
      "password" => $this->input->post('pw_baru', true)
    ];

    $this->db->where('id', $id);
    $this->db->update('admin', $data);
  }
}