<?php
class Logout extends CI_Controller {

 public function admin()
 {
    $this->session->sess_destroy();
	redirect(base_url('Akunadmin/login'));
}

public function user()
 {
    $this->session->sess_destroy();
	redirect(base_url('home'));
}
}