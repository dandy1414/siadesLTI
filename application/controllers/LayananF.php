<?php

class LayananF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Layanan_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Layanan';
        $data['layanan'] = $this->Layanan_m->select_db();
        $keyword = $this->input->post('keyword');
        if( !empty($keyword) ) {
            $data['layanan'] = $this->Layanan_m->cariDataLayanan($keyword);
        }
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detailLayanan($id){
        $data['judul'] = 'Halaman Detail Layanan';
        $data['layanan'] = $this->Layanan_m->select_by_db($id);
        $this->load->view('templates/header', $data);
        $this->load->view('layanan/detail', $data);
        $this->load->view('templates/footer');
    }

} 