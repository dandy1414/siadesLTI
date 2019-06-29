<?php

class Registrasi_admin_m extends CI_Model{
    
    function registrasi($data){
        $this->db->insert('admin', $data);
    }
    function login($data){
        return $this->db->get_where('admin',$data)->result();
    }
    
}
