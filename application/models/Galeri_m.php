<?php
class Galeri_m extends CI_Model{
	function insert_db($data){
		$this->db->insert('galeri',$data);
	}
        function select_db(){
            return $this->db->query("Select * FROM galeri")->result();
        }

        function tampilCarousel(){
            return $this->db->query("SELECT * FROM galeri ORDER by id_galeri DESC LIMIT 3")->result();
        }
       function delete_db($id){
            $this->db->where('id_galeri',$id);
            $this->db->delete('galeri');
        }
        function select_id($id){
            return $this->db->query("Select * FROM galeri WHERE id_galeri='$id'")->result();
        }
        function edit_db($id,$data){
            $this->db->where('id_galeri',$id);
            $this->db->update('galeri',$data);
        }
        function select_galeri_where($id) {
        $query = $this->db->query("SELECT * FROM galeri WHERE id_galeri='$id'");
        return $query->result();
    }
}