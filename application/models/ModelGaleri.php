<?php
class ModelGaleri extends CI_model {

  public function getAllGaleri(){
      return $this->db->get('galeri')->result_array();
  }

  public function getGaleri($id){
    return $this->db->get_where('galeri', ['id' => $id])->row_array();
  }

  public function insertGaleri(){
    $config['upload_path']          = './upload/galeri/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->input->post('foto');
    $config['overwrite']			      = true;
    $config['max_size']             = 1024; 
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
      $data = [
        "foto"    => $this->upload->data("file_name"),
        "keterangan"  => $this->input->post('keterangan', true)
      ];

      $this->db->insert('galeri', $data);

    }else{
      $data = [
        "foto"    => "default.jpg",
        "keterangan"  => $this->input->post('keterangan', true)
      ];

      $this->db->insert('galeri', $data);
    }
    
  }

  public function updateGaleri($id) {

  }
  public function deleteGaleri($id) {
    return $this->db->delete('galeri', ['id' => $id]);
  }

  
}