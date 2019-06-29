<?php

class LembagaF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Lembaga_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Lembaga Desa';
        $data['lembaga'] = $this->Lembaga_m->select_db();
        $keyword = $this->input->post('keyword');
        if (!empty($keyword)) {
            $data['lembaga'] = $this->Lembaga_m->cariDataLembaga($keyword);
        }
        $this->load->view('templates/header', $data);
        $this->load->view('lembaga/index', $data);
        $this->load->view('templates/footer');
    }

    public function detailLembaga($id)
    {
        $data['judul'] = 'Halaman Detail Lembaga Desa';
        $data['lembaga'] = $this->Lembaga_m->select_by_db($id);
        $this->load->view('templates/header', $data);
        $this->load->view('lembaga/detail', $data);
        $this->load->view('templates/footer');
    }
}