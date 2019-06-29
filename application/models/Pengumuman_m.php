<?php
class Pengumuman_m extends CI_Model{  
    
    function insert_db($data) {     
        $this->db  ->insert('pengumuman', $data);
        
    }
    function select_db(){
        return $this->db->query("Select * FROM pengumuman")->result();
        
    }
    
    function delete_db($id) {
        $this->db  ->where('id_pengumuman', $id);
        $this->db  ->delete('pengumuman');
    
    }
    
    function select_by_db($id) {
        return $this->db  ->query("SELECT * FROM pengumuman WHERE id_pengumuman='$id'")->result();
    
    } 
    
    function edit_db($id, $data){   
        $this->db  ->where('id_pengumuman', $id);   
        $this->db  ->update('pengumuman', $data);
    
    } 
    
    function select_pengumuman(){
        $query = $this->db->query("SELECT * FROM pengumuman order by tanggal DESC limit 10");
        return $query->result();
    }
    
     function select_pengumuman_where($id) {
        $query = $this->db->query("SELECT * FROM pengumuman WHERE id_pengumuman='$id'");
        return $query->result();
    }
    
    
} 