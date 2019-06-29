<?php
/**
 * 
 */
class Penduduk_m extends CI_Model
{
	
	function insert_db($data) {     
		$this->db  ->insert('penduduk', $data);
	}

	function select_db() {
	 return $this->db->query("Select * FROM penduduk")->result();
	}  
        
        function select_gender($gender){
            return $this->db->query("Select jumlah FROM penduduk WHERE gender='$gender'")->row();
        }
        
        function delete_db($id) {
            $this->db  ->where('gender', $id);
            $this->db  ->delete('penduduk');
            
        }
        
        function select_by_db($id) {
            return $this->db  ->query("Select * FROM penduduk WHERE gender='$id'")->result();
        
        }
        
        function edit_db($id, $data){   
            $this->db  ->where('gender', $id);   
            $this->db  ->update('penduduk', $data);
        
        }
         function select_penduduk(){
        $query = $this->db->query("SELECT * FROM penduduk");
        return $query->result();
    }
    
     function select_penduduk_where($gender) {
        $query = $this->db->query("SELECT * FROM penduduk WHERE gender='$gender'");
        return $query->result();
    }

}