<?php

class Akunadmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->has_userdata('username')){
            redirect('Pendidikan');
        }
    }

    function registrasi() {
        $this->load->view('registrasi_admin_v');
    }

    function insert() {
        $data = array(
            'username' => $this->input->post('in_username'),
            'password' => $this->input->post('in_password'));
        $this->Registrasi_admin_m->registrasi($data);
        redirect('Akunadmin/login');
    }

    function login() {
        $this->load->view('login_admin_v');
    }

    function proses_login() {
        $username = $this->input->post('in_username');
        $pass = $this->input->post('in_password');
        $kondisi = array(
            'username' => $username,
            'password' => $pass
        );
        $result = $this->Loginadmin_m->login($username, $pass);
        print_r($result);
        if (sizeof($result) > 0) {
            $data = array('username' => $username);
            $this->session->set_userdata($data);
            redirect('Pendidikan');
        } else {
//            echo 'login gagal!!';
            redirect('Akunadmin/login');
        }
    }

}
