<?php

class PotensiF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Potensidesa_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Potensi Desa';
        $data['potensi'] = $this->Potensidesa_m->select_db();
        $this->load->view('templates/header', $data);
        $this->load->view('potensi/index', $data);
        $this->load->view('templates/footer');
    }

    public function detailPotensi($id){
        $data['judul'] = 'Halaman Detail Potensi Desa';
        $data['potensi'] = $this->Potensidesa_m->select_by_db($id);
        $this->load->view('templates/header', $data);
        $this->load->view('potensi/detail', $data);
        $this->load->view('templates/footer');
    }
}