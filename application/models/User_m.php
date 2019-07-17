<?php

class User_m extends CI_Model {
    function selectAllUser()
    {
        return $this->db->get('user')->result();
    }

    function registrasi($data){
        $this->db->insert('user', $data);
    }

    function login($username,$password)
	{
		$query=$this->db->query("select * from user where username = '$username' and password='$password'");
		return $query;
    }
    
    function cek_login($table,$where){		
        return $this->db->get_where($table,$where);
    }

    function select_by_db($id) {
        return $this->db->query("SELECT * FROM user WHERE id_user='$id'")->result();
    }

    function delete_db($id){
        $this->db->where('id_user',$id);
        $this->db->delete('user');
    }

    function edit_db($id, $data){   
        $this->db->where('id_user', $id);   
        $this->db->update('user', $data); 
    }
}