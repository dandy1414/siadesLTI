<?php
class Login_m extends CI_Model
{
	
	function login($username,$password)
	{
		$query=$this->db->query("select * from user where email = '$username' and password='$password'");
		return $query;
	}
}