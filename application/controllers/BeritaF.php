<?php

class BeritaF extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Berita_m');
    }

    public function index()
    {
        $data['judul'] = 'Halaman Layanan';
        $data['berita'] = $this->Berita_m->select_db();
        // $data['kategori'] = $this->Berita_m->tampilBeritaAgama($id);
        $keyword = $this->input->post('keyword');
        if (!empty($keyword)){
            $data['berita'] = $this->Berita_m->cariDataBerita($keyword);
        }
        $this->load->view('templates/header', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('templates/footer');
    }

    public function detailBerita($id){
        $data['judul'] = 'Halaman Detail Berita';
        $data['berita'] = $this->Berita_m->select_id($id);
        $this->load->view('templates/header', $data);
        $this->load->view('berita/detail', $data);
        $this->load->view('templates/footer');
    }
}