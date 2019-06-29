<?php
/**
 * 
 */
class Potensidesa_m extends CI_Model
{
	
	function insert_db($data) {     
		$this->db  ->insert('potensidesa', $data);
	}

	function select_db() {
	 return $this->db->query("Select * FROM potensidesa")->result();
	} 
        
    function delete_db($id) {
            $this->db  ->where('id_potensi', $id);$this->db  ->delete('potensidesa');
        
    }
        
    function select_by_db($id) {
            return $this->db  ->query("Select * FROM potensidesa WHERE id_potensi='$id'")->result();
        
    }
        
    function edit_db($id, $data){   
            $this->db  ->where('id_potensi', $id);   
            $this->db  ->update('potensidesa', $data);
        
    }
       function select_potensi(){
        $query = $this->db->query("SELECT * FROM potensidesa");
        return $query->result();
    }
    
     function select_potensi_where($id) {
        $query = $this->db->query("SELECT * FROM potensidesa WHERE id_potensi='$id'");
        return $query->result();
    }

    function tampilCarousel($id)
    {
        return $this->db->query("SELECT * FROM potensidesa ORDER by nama_desa DESC LIMIT 3 WHERE id_potensi='$id'")->result();
    }
}
