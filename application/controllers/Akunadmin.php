<?php

class Akunadmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->has_userdata('username') && $this->session->has_userdata('level') == "admin" ){
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

    function proses_login(){
		$username = htmlspecialchars($this->input->post('in_username', TRUE));
		$password = htmlspecialchars($this->input->post('in_password', TRUE));
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Loginadmin_m->cek_login("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
                'status' => "login",
                'level' =>"admin"
				);

            $this->session->set_userdata($data_session);
            redirect('Pendidikan');
		}else{
            $this->session->set_flashdata('flash', 'Anda gagal login');
            redirect('Akunadmin/login');
		}
    }
    

}
