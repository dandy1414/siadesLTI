<?php
class Account extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }
    
    function registrasi() { 
       // $this->load->library('session');
        $this->load->view('registrasi_v');
    }

    function index()
    {
        $data['user'] = $this->User_m->selectAllUser();
        $this->load->view('user_v', $data);          
    }

    function form() {     
        $this->load->view('user_form_v');
    }
    
    function insert() { 
        $data = array(     
             'alamat' => htmlspecialchars($this->input->post('in_alamat', TRUE)),
             'username' => htmlspecialchars($this->input->post('in_username', TRUE)),     
             'password' => htmlspecialchars($this->input->post('in_password', TRUE)),
             'jenis_kelamin' => htmlspecialchars($this->input->post('in_jenis_kelamin', TRUE))
            );   
        $this->User_m->registrasi($data); 
        redirect('Account');   
    }

    function select_by($id) {
        $data['user'] = $this->User_m->select_by_db($id);
        $this->load   ->view('user_form_edit_v', $data);
    }

    function delete($id_user) {
        $this->User_m->delete_db($id_user);
        redirect('Account');
    }

    function edit() {
        $id = $this->input->post('id');
        $data = array(
            'username' => htmlspecialchars($this->input->post('in_username', TRUE)),
            'password' => htmlspecialchars($this->input->post('in_password', TRUE)),
            'alamat' => htmlspecialchars($this->input->post('in_alamat', TRUE))
        );
        $this->User_m->edit_db($id, $data);
        redirect('Account');
    }
    
    function login(){
        $this->load->view('login_v');
    }

    function proses_login(){
		$username = $this->input->post('in_username');
		$password = $this->input->post('in_password');
		$where = array(
			'username' => $username,
			'password' => ($password)
			);
		$cek = $this->User_m->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

            $this->session->set_userdata($data_session);
            redirect('Pendidikan');
		}else{
            redirect('Akunadmin/login');
		}
    }
                
    }