<?php
class Balita_m extends CI_Model{
	function insert_db($data){
		$this->db->insert('balita',$data);
	}
        function select_db(){
            return $this->db->query("Select * FROM balita")->result();
        }
        
        
        function delete_db($gender){
            $this->db->where('gender',$gender);
            $this->db->delete('balita');
        }
        
         function edit_db($gender,$data){
            $this->db->where('gender',$gender);
            $this->db->update('balita',$data);
        }
        
     function select_gender($gender){
            return $this->db->query("Select * FROM balita WHERE gender='$gender'")->result();
        }

    function select_balita_where($id) {
        $query = $this->db->query("SELECT * FROM balita WHERE gender='$id'");
        return $query->result();
    }
}