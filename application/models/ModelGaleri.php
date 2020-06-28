<?php
class ModelGaleri extends CI_model {

  public function getAllGaleri(){
      return $this->db->get('galeri')->result_array();
  }

  public function getGaleri($id){
    return $this->db->get_where('galeri', ['id' => $id])->row_array();
  }

  public function insertGaleri(){
    $data = [
      "foto"        => $this->upload->data("file_name"),
      "keterangan"  => $this->input->post('keterangan', true)
    ];

    $this->db->insert('galeri', $data);
  }

  public function updateGaleri($id) {
    $data = [
      "foto"        => $this->upload->data("file_name"),
      "keterangan"  => $this->input->post('keterangan', true)
    ];

    $this->db->where('id', $id);
    $this->db->update('galeri', $data);
  }
  public function deleteGaleri($id) {
    $file = $this->getGaleri($id);

    unlink('././upload/galeri/'.$file['foto']);
    $this->db->delete('galeri', ['id' => $id]);
  }

  
}