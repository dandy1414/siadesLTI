<?php

class GaleriF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Galeri_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Galeri';
        $data['galeri'] = $this->Galeri_m->select_db();
        $this->load->view('templates/header', $data);
        $this->load->view('galeri/index');
        $this->load->view('templates/footer');
    }

    public function detailGaleri($id)
    {
        $data['judul'] = 'Halaman Detail Galeri';
        $data['galeri'] = $this->Galeri_m->select_db();
        $this->load->view('templates/header', $data);
        $this->load->view('galeri/detail');
        $this->load->view('templates/footer');
    }
}