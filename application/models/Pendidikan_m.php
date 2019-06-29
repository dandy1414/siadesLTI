<?php
class Pendidikan_m extends CI_Model{ 
    
    function insert_db($data) {     
        $this->db  ->insert('pendidikan', $data);
        
    } 
    
    function select_db() {
        return $this->db->query("Select * FROM pendidikan")->result();
    }
    
    function delete_db($id) {
        $this->db  ->where('id_pendidikan', $id);
        $this->db  ->delete('pendidikan');
        
    }
    
    function select_by_db($id) {
        return $this->db  ->query("Select * FROM pendidikan WHERE id_pendidikan='$id'")->result();
        
    }
    
    function edit_db($id, $data){   
        $this->db  ->where('id_pendidikan', $id);   
        $this->db  ->update('pendidikan', $data);
    
    }
    
    function select_pendidikan(){
        $query = $this->db->query("SELECT * FROM pendidikan");
        return $query->result();
    }
    
     function select_pendidikan_where($id) {
        $query = $this->db->query("SELECT * FROM pendidikan WHERE id_pendidikan='$id'");
        return $query->result();
    }
}