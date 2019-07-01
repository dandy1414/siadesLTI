<?php
class Kategori_m extends CI_Model{
	function insert_db($data){
		$this->db->insert('kategori',$data);
	}
        function select_db(){
            return $this->db->query("SELECT * FROM kategori")->result();
        }
       function delete_db($id){
            $this->db->where('id_kategori',$id);
            $this->db->delete('kategori');
        }
        function select_id($id){
            return $this->db->query("Select * FROM kategori WHERE id_kategori='$id'")->result();
        }
        function edit_db($id,$data){
            $this->db->where('id_kategori',$id);
            $this->db->update('kategori',$data);
        }
        function select_kategori(){
        $query = $this->db->query("SELECT * FROM kategori");
        return $query->result();
    }
    
     function select_kategori_where($id) {
        $query = $this->db->query("SELECT * FROM kategori WHERE id_kategori='$id'");
        return $query->result();
    }
}