<?php

/**
 * Description of Lembaga
 *
 * @author Lenovo
 */
class Lembaga extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('username')) {
            redirect('Akunadmin/login');
        }
    }

    function form() {
        $this->load->view('lembaga_form_v');
    }

    function insert() {
        $data = array(
            'nama_lembaga' => $this->input->post('in_nama_lembaga'),
            'detail_lembaga' => $this->input->post('in_detail_lembaga'));
        $this->Lembaga_m->insert_db($data);
        redirect('Lembaga/form');
    }

    function index() {
        $this->load->view('lembaga_v');
    }

    function delete($id) {
        $this->Lembaga_m->delete_db($id);
        redirect('Lembaga');
    }

    function select_by($id) {
        $data['lembaga'] = $this->Lembaga_m->select_by_db($id);
        $this->load->view('lembaga_form_edit_v', $data);
    }

    function edit() {
        $id = $this->input->post('id');
        $data = array(
            'nama_lembaga' => $this->input->post('in_nama_lembaga'),
            'detail_lembaga' => $this->input->post('in_detail_lembaga'));
        $this->Lembaga_m->edit_db($id, $data);
        redirect('Lembaga');
    }

}
