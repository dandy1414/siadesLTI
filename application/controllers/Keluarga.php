<?php

class Keluarga extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }
    
    function form(){
        $this->load->view('keluarga_form_v');
    }
    function insert(){
        $data = array(
            'id_keluarga'=>$this->input->post('id_keluarga'),
            'status' =>$this->input->post('status'),
            'jumlah' =>$this->input->post('jumlah')
                );
        $this->Keluarga_m->insert_db($data);
        redirect('Keluarga/form');
    }
     function index(){
            $this->load->view('keluarga_v');
     }
     function delete($id_keluarga) {
        $this->Keluarga_m->delete_db($id_keluarga);
        redirect('Keluarga');
    }

    function select_by($id_keluarga) {

        $data['keluarga'] = $this->Keluarga_m->select_id($id_keluarga);
        $this->load->view('keluarga_form_edit_v', $data);
    }

    function edit() { 
        $id_keluarga = $this->input->post('id_keluarga');
        $data = array(
            'status' => $this->input->post('status'),
            'jumlah' => $this->input->post('jumlah')
                );
        $this->Keluarga_m->edit_db($id_keluarga, $data);
        $this->session->set_flashdata('sukses', 'Data berhasil dirubah');
        redirect('Keluarga');
    }
   
}



