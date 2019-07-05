<?php

class Lansia extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('Akunadmin/login');
		}
    }
    
    function form(){
        $this->load->view('lansia_form_v');
    }
    function insert(){
        $data = array('gender'=>$this->input->post('gender'),
            'jumlah' =>$this->input->post('jumlah')
                );
        $this->Lansia_m->insert_db($data);
        redirect('Lansia/form');
    }
    function index(){
            $this->load->view('lansia_v');
        }
    function delete($gender){
        $this->Lansia_m->delete_db($gender);
        redirect ('Lansia');
    }
    function select_by($gender){
        
        $data['lansia'] = $this->Lansia_m->select_gender($gender);
        $this->load->view('lansia_form_edit_v',$data);
    }
    function edit(){
        $gender = $this->input->post('gender');
        $data = array(
            'jumlah' => $this->input->post('jumlah')
                );
        $this->Lansia_m->edit_db($gender,$data);
        redirect('Lansia');
    } 
    
}



