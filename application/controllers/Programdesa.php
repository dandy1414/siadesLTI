<?php

/**
 * 
 */
class Programdesa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('username')) {
            redirect('Akunadmin/login');
        }
    }

    function form() {
        $this->load->view('programdesa_form_v');
    }

    function insert() {
        $data = array(
            'lokasi' => $this->input->post('in_lokasi'),
            'pekerjaan' => $this->input->post('in_pekerjaan'),
            'keterangan' => $this->input->post('in_keterangan'));

        $this->Programdesa_m->insert_db($data);
        redirect('Programdesa/form');
    }

    function index() {
        $this->load->view('programdesa_v');
    }

    function delete($id) {
        $this->Programdesa_m->delete_db($id);
        redirect('Programdesa');
    }

    function select_by($id) {
        $data['programdesa'] = $this->Programdesa_m->select_by_db($id);
        $this->load->view('programdesa_form_edit_v', $data);
    }

    function edit() {
        $id = $this->input->post('id');
        $data = array(
            'lokasi' => $this->input->post('in_lokasi'),
            'pekerjaan' => $this->input->post('in_pekerjaan'),
            'keterangan' => $this->input->post('in_keterangan'));
        $this->Programdesa_m->edit_db($id, $data);
        redirect('Programdesa');
    }

}
