<?php

class PengumumanF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Pengumuman_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Pengumuman';
        $data['pengumuman'] = $this->Pengumuman_m->select_db();
        $this->load->view('templates/header', $data);
        $this->load->view('pengumuman/index', $data);
        $this->load->view('templates/footer');
    }

    public function detailPengumuman($id){
        $data['judul'] = 'Halaman Pengumuman';
        $data['pengumuman'] = $this->Pengumuman_m->select_by_db($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pengumuman/detail', $data);
        $this->load->view('templates/footer');
    }
}