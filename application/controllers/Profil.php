<?php

class Profil extends CI_Controller{

    public function index()
    {
        $data['judul'] = 'Halaman Profil Desa';
        $this->load->view('templates/header', $data);
        $this->load->view('profil_desa/index');
        $this->load->view('templates/footer');
    }
}