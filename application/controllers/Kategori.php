<?php
class Kategori extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }
    function form(){
        $this->load->view('kategori_form_v');
    }
    function insert(){
        $data = array('id_kategori'=>$this->input->post('id_kategori'),
            'kategori' =>$this->input->post('kategori')
                );
        $this->Kategori_m->insert_db($data);
        redirect('Kategori/form');
    }
     function index(){
            $this->load->view('kategori_v');
     }
     function delete($id_kategori) {
        $this->Kategori_m->delete_db($id_kategori);
        redirect('Kategori');
    }

    function select_by($id_kategori) {

        $data['kategori'] = $this->Kategori_m->select_id($id_kategori);
        $this->load->view('kategori_form_edit_v', $data);
    }

    function edit() { 
        $id_kategori = $this->input->post('id_kategori');
        $data = array(
            'kategori' => $this->input->post('kategori')
                );
        $this->Kategori_m->edit_db($id_kategori, $data);
        redirect('Kategori');
    }
    
    
}



