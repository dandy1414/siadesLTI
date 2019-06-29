<?php
class Lansia_m extends CI_Model{
	function insert_db($data){
		$this->db->insert('lansia',$data);
	}
        function select_db(){
            return $this->db->query("Select * FROM lansia")->result();
        }
        
        function delete_db($gender){
            $this->db->where('gender',$gender);
            $this->db->delete('lansia');
        }
        function select_gender($gender){
            return $this->db->query("Select * FROM lansia WHERE gender='$gender'")->result();
        }
        function edit_db($gender,$data){
            $this->db->where('gender',$gender);
            $this->db->update('lansia',$data);
        }
        
        function select_lansia(){
        $query = $this->db->query("SELECT * FROM lansia");
        return $query->result();
    }
    
     function select_lansia_where($id) {
        $query = $this->db->query("SELECT * FROM lansia WHERE gender='$id'");
        return $query->result();
    }
}