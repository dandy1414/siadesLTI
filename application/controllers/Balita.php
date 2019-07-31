<?php

class Balita extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }
    function form(){
        $this->load->view('balita_form_v');
    }
    function insert(){
        $data = array('gender'=>$this->input->post('gender'),
            'jumlah' =>$this->input->post('in_jumlah')
                );
        $this->Balita_m->insert_db($data);
        redirect('Balita/form');
    }
    function index(){
            $this->load->view('balita_v');
        }
    function delete($gender){
        $this->Balita_m->delete_db($gender);
        redirect ('Balita');
    }
    function select_by($gender){
        
        $data['balita'] = $this->Balita_m->select_gender($gender);
        $this->load->view('balita_form_edit_v',$data);
    }
    function edit(){
        $gender = $this->input->post('gender');
        $data = array(
            'jumlah' => $this->input->post('jumlah')
                );
        $this->Balita_m->edit_db($gender,$data);
        $this->session->set_flashdata('sukses', 'Data berhasil dirubah');
        redirect('Balita');
    } 
    
    
}



