<?php

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Berita_m');
        $this->load->model('Galeri_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}