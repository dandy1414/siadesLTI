<?php

class PengaduanF extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if ( $this->session->userdata('level') !== "user" ){
            echo "<script>var a = confirm('Anda harus login terlebih dahulu');
  
            if(a){
            location.assign('".site_url('User')."');
          } else {
            location.assign('".site_url('Home')."');
          }
          </script>";
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Pengaduan';

        $this->load->view('templates/header', $data);
        $this->load->view('pengaduan/index');
        $this->load->view('templates/footer');
    }

    function insert() {
        $data = array(
            'username' => $this->input->post('in_username'),
            'keluhan' => $this->input->post('in_keluhan'));
        $this->Pengaduan_m->insert_db($data);
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('Pengaduanf/index');
    }

}