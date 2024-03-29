<?php

/**
 * 
 */
class Programdesa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
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
        $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
        redirect('Programdesa/index');
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
        $this->session->set_flashdata('sukses', 'Data berhasil dirubah');
        redirect('Programdesa/index');
    }

}
