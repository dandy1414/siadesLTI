<?php
/**
 * 
 */
class Privacy_m extends CI_Model
{
	
	function insert_db($data) {     
		$this->db  ->insert('privacy', $data);
	}

	function select_db() {
	 return $this->db->query("Select * FROM privacy")->result();
	}  
        
        function delete_db($id) {
            $this->db  ->where('id_privacy', $id);$this->db  ->delete('privacy');
        
        }

        function select_by_db($id) {
            return $this->db  ->query("Select * FROM privacy WHERE id_privacy='$id'")->result();
        
        }
        
        function edit_db($id, $data){   $this->db  ->where('id_privacy', $id);   
        $this->db  ->update('privacy', $data);
        
        }
        function select_privacy(){
        $query = $this->db->query("SELECT * FROM privacy");
        return $query->result();
    }
    
     function select_privacy_where($id) {
        $query = $this->db->query("SELECT * FROM privacy WHERE id_privacy='$id'");
        return $query->result();
    }
}