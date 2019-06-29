<?php
/**
 * 
 */
class Programdesa_m extends CI_Model
{
	
	function insert_db($data) {     
		$this->db  ->insert('programdesa', $data);
	}

	function select_db() {
	 return $this->db->query("Select * FROM programdesa")->result();
	}  
        
        function delete_db($id) {
            $this->db  ->where('id_program', $id);$this->db  ->delete('programdesa');
        
        }

        function select_by_db($id) {
            return $this->db  ->query("Select * FROM programdesa WHERE id_program='$id'")->result();
        
        }
        
        function edit_db($id, $data){   $this->db  ->where('id_program', $id);   
        $this->db  ->update('programdesa', $data);
        
        }
        function select_programdesa_where($id) {
        $query = $this->db->query("SELECT * FROM programdesa WHERE id_program='$id'");
        return $query->result();
    }
}