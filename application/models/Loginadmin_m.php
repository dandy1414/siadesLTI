<?php
class Loginadmin_m extends CI_Model{
    function login($username,$password)
	{
		$query=$this->db->query("select * from admin where username = '$username' and password='$password'");
		return $query;
	}
        
        function registrasi($data){
        $this->db->insert('admin', $data);
         }
    
         function cek_login($table,$where){		
            return $this->db->get_where($table,$where);
        }
}