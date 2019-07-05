<?php

/**
 * 
 */
class Penduduk extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('Akunadmin/login');
		}
    }


    
    function form() {
        $data['total']=$this->Penduduk_m->select_gender('perempuan');
        $this->load->view('penduduk_form_v',$data);
        
    }

    function insert() {
        $data = array(
            'gender' => $this->input->post('gender'),
            'jumlah' => $this->input->post('in_jumlah'));
            

        $this->Penduduk_m->insert_db($data);
        redirect('Penduduk/form');
    }

    function index() {
        $this->load->view('penduduk_v');
    }
    
    function delete($id) {  
        $this->Penduduk_m->delete_db($id);       
    redirect('Penduduk');
    
    }
    
    function select_by($id) {
        $data['penduduk'] = $this->Penduduk_m->select_by_db($id);
        $this->load   ->view('penduduk_form_edit_v', $data);
    
    } 
    
    function edit() {
        $id = $this->input->post('id');$data = array(
            'jumlah' => $this->input->post('in_jumlah'));   
        
        $this->Penduduk_m->edit_db($id, $data);redirect('Penduduk');
        
    }
               

}
