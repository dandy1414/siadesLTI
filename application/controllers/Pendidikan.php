<?php

class Pendidikan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }

    function form() {
        $this->load->view('pendidikan_form_v');
    }

    function insert() {
        $data = array(
            'status' => $this->input->post('in_status'),
            'jumlah' => $this->input->post('in_jumlah'));
        $this->Pendidikan_m->insert_db($data);
        redirect('Pendidikan/form');
    }

    function index() {
        
                $this->load->view('pendidikan_v');

    }

    function delete($id) {
        $this->Pendidikan_m->delete_db($id);
        redirect('Pendidikan');
    }

    function select_by($id) {
        $data['pendidikan'] = $this->Pendidikan_m->select_by_db($id);
        $this->load->view('pendidikan_form_edit_v', $data);
    }

    function edit() {
        $id = $this->input->post('id');
        $data = array(
            'status' => $this->input->post('in_status'),
            'jumlah' => $this->input->post('in_jumlah'));
        $this->Pendidikan_m->edit_db($id, $data);
        $this->session->set_flashdata('sukses', 'Data berhasil dirubah');
        redirect('Pendidikan');
    }
}
