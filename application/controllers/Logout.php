<?php
class Logout extends CI_Controller {

 public function index()
 {
  $this->session->unset_userdata('username');
  redirect('Akunadmin/proses_login');
 }

} 