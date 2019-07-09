<?php

class PengaduanF extends CI_Controller{

    public function index()
    {
        $data['judul'] = 'Halaman Pengaduan';

        $this->load->view('templates/header', $data);
        $this->load->view('pengaduan/index');
        $this->load->view('templates/footer');
    }

    function insert() {
        $data = array(
            'username' => $this->input->post('in_username'),
            'keluhan' => $this->input->post('in_keluhan'));
        $this->Pengaduan_m->insert_db($data);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('Pengaduanf/index');
    }

}