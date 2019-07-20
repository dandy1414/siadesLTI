<?php
class User extends CI_Controller{
    // public function __construct() {
    //     parent::__construct();
    //     if($this->session->userdata('status') != "login"){
    //         redirect('Akunadmin/login');
	// 	}
    // }
    
    function registrasi() { 
       // $this->load->library('session');
        $this->load->view('registrasi_v');
    }

    function index()
    {
        $data['judul'] = 'Login User';
        $this->load->view('templates/header', $data);
        $this->load->view('login_user_v');    
        $this->load->view('templates/footer');      
    }
    
    function login(){
        $this->load->view('login_v');
    }

    function proses_login(){
		$username = $this->input->post('in_username');
		$password = $this->input->post('in_password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
        $cek = $this->User_m->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
                'status' => "login",
                'level' => "user"
				);

            $this->session->set_userdata($data_session);
            redirect('Pengaduanf');
		}else{
            $this->session->set_flashdata('flash', 'Anda gagal login');
            redirect('User');
		}
    }
                
    }