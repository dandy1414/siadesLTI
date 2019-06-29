<?php
class Account extends CI_Controller{
    
    function registrasi() { 
       // $this->load->library('session');
        $this->load->view('registrasi_v');
        
    }
    
    function insert() { 
        $data = array(     
            'jenis_kelamin' => $this->input->post('in_jenis_kelamin'),
             'alamat' => $this->input->post('in_alamat'),
             'email' => $this->input->post('in_email'),     
             'password' => $this->input->post('in_password') );   
        $this->Registrasi_m->registrasi($data); 
        redirect('Account/login');
        
    }
    
    function login(){
        $this->load->view('login_v');
        
        
    }
    function proses_login(){
        $username = $this->input->post('in_username');
        $pass = $this->input->post('in_password');
        $kondisi = array(
            'email'=>$username,
            'password'=>$pass
        );
        $result=$this->Registrasi_m->login($kondisi);
        print_r($result);
        if(sizeof($result)>0){
            $data = array('email'=>$username);
            $this->session->set_userdata($data);
            redirect('Pendidikan');
        }else{
            echo 'login gagal!!';
        }
                
    }
    
    
    
}