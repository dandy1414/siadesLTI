<?php

class PrivacyF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Privacy_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Privacy Policy';
        $data['privacy'] = $this->Privacy_m->select_db();
        $this->load->view('templates/header', $data);
        $this->load->view('privacy/index');
        $this->load->view('templates/footer');
    }
}