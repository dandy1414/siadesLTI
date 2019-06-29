<?php

class ProgramF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Programdesa_m');
    }

    public function index()
    {
        // $this->programdesa_m->select_db();
        $data['judul'] = 'Halaman Program Desa';
        $this->load->view('templates/header', $data);
        $this->load->view('program/index');
        $this->load->view('templates/footer');
    }
}