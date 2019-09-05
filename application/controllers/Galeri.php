<?php

class Galeri extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }

    function form() {
        $this->load->view('galeri_form_v');
    }

    function insert() {
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png|JPG|PNG';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('in_gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                'keterangan' => $this->input->post('in_keterangan'),
                'gambar' => $gambar['file_name']
            );
            $this->Galeri_m->insert_db($data);
            $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
             redirect('Galeri/index');
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        }
    }

    function index() {
        $this->load->view('galeri_v');
    }

    function delete($id_galeri) {
		$data = $this->select_by($id_galeri);
		unlink("./assets/upload/".$data[0]->gambar);
        $this->Galeri_m->delete_db($id_galeri);
        redirect('Galeri');
    }

    function select_by($id_galeri) {

        $data['galeri'] = $this->Galeri_m->select_id($id_galeri);
        $this->load->view('galeri_form_edit_v', $data);
    }

    function edit() {
        $id_galeri = $this->input->post('id_galeri');
        $nm_file = $this->input->post('nm_foto');
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('gambar')){
            $gambar = $this->upload->data();
            $data = array(
                'keterangan' =>$this->input->post('in_keterangan'),
                'gambar' => $gambar['file_name']
            );
        }else{
            $data = array(
                'keterangan' => $this->input->post('in_keterangan')
            );
        //    $error = array(
        //        'error' => $this->upload->display_errors()
        //    );
        //    echo json_encode($error);
        }
        $this->Galeri_m->edit_db($id_galeri, $data);
        $this->session->set_flashdata('sukses', 'Data berhasil dirubah');
        redirect('Galeri/index');
    }
}
