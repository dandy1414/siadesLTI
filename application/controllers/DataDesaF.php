<?php

class DataDesaF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Lembaga_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Data Desa';
        $this->load->view('templates/header', $data);
        $this->load->view('data_desa/index');
        $this->load->view('templates/footer');
    }
}