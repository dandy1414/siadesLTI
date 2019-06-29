<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lembaga_m
 *
 * @author Lenovo
 */
class Lembaga_m extends CI_Model{
    
    function insert_db($data) {     
        $this->db  ->insert('lembaga', $data);
    
    }
    
    function select_db(){
        return $this->db->query("Select * FROM lembaga")->result();
    }
    
    function delete_db($id) {
        $this->db  ->where('id_lembaga', $id);
    $this->db  ->delete('lembaga');
    
    }
    
    function select_by_db($id) {
        return $this->db  ->query("Select * FROM lembaga WHERE id_lembaga='$id'")->result();
    
    }
    
     function edit_db($id, $data){   
      $this->db  ->where('id_lembaga', $id);   
      $this->db  ->update('lembaga', $data);
  
  } 
  
  function select_lembaga() {
        $query = $this->db->query("SELECT * FROM lembaga");
        return $query->result();
    }

    function select_lembaga_where($id) {
        $query = $this->db->query("SELECT * FROM lembaga WHERE id_lembaga='$id'");
        return $query->result();
    }

    function cariDataLembaga($keyword)
    {
        $this->db->like('nama_lembaga', $keyword);
        return $this->db->get('lembaga')->result();
    }
}
