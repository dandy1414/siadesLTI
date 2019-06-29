<?php


class Layanan_m extends CI_Model{
    
  function insert_db($data) {    
      $this->db  ->insert('layanan', $data);
      
  } 
  
  function select_db(){
      return $this->db->query("Select * FROM layanan")->result();
  }
  
  function delete_db($id) {
      $this->db  ->where('id_layanan', $id);
      $this->db  ->delete('layanan');
  
  } 
  function select_by_db($id) {
      return $this->db ->query("SELECT * FROM layanan WHERE id_layanan='$id'")->result();
  }
  
  function edit_db($id, $data){   
      $this->db  ->where('id_layanan', $id);
      $this->db  ->update('layanan', $data);
  
  } 
  function select_layanan_where($id) 
  {
    $query = $this->db->query("SELECT * FROM layanan WHERE id_layanan='$id'");
    return $query->result();
  }
  
  function cariDataLayanan($keyword)
  {
      $this->db->like('nama_layanan', $keyword);
      $this->db->or_like('isi_layanan', $keyword);
      return $this->db->get('layanan')->result();
  }


}
