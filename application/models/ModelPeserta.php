<?php
class ModelPeserta extends CI_model {

  public function getAllPeserta(){
      return $this->db->get('peserta')->result_array();
  }

  public function getPeserta($id){
    return $this->db->get_where('peserta', ['id' => $id])->row_array();
  }

  public function updatePeserta($id) {

  }
  public function deletePeserta($id) {
    return $this->db->delete('peserta', ['id' => $id]);
  }
}