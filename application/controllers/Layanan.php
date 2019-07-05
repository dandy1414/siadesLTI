<?php

class Layanan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('Akunadmin/login');
		}
    }

    function form() {
        $this->load->view('layanan_form_v');
    }

    function insert() {
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $img = '';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data();
            // $data = array(
            //     'nama_layanan' => $this->input->post('nama_layanan'),
            //     'isi_layanan' => $this->input->post('isi_layanan'),
            //     'gambar' => $gambar['file_name']
            // );
            // $this->Layanan_m->insert_db($data);
            // redirect('Layanan/form');
            $img = $gambar['file_name'];
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        } 
        
        $nm_file = time() . '.pdf';
        $config['upload_path'] = './assets/document/';
        $config['allowed_types'] = 'pdf|doc';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file')) {
            $file = $this->upload->data();
            $data = array(
                'nama_layanan' => $this->input->post('nama_layanan'),
                'isi_layanan' => $this->input->post('isi_layanan'),
                'file' => $file['file_name'], 'gambar' => $img
            );
            $this->Layanan_m->insert_db($data);
            redirect('Layanan/form');
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        }
    }

    function index() {
        $this->load->view('layanan_v');
    }

    function delete($id) {
        $this->Layanan_m->delete_db($id);
        redirect('Layanan');
    }

    function select_by($id) {
        $data['layanan'] = $this->Layanan_m->select_by_db($id);
        $this->load->view('layanan_form_edit_v', $data);
    }

    function edit() {
        $id_layanan = $this->input->post('id_layanan');
        $nm_file = $this->input->post('nm_foto');
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                'nama_layanan' => $this->input->post('nama_layanan'),             
                'isi_layanan' => $this->input->post('isi_layanan'),
                'gambar' => $gambar['file_name']
            );
        } else {
            $data = array(
                'nama_layanan' => $this->input->post('nama_layanan'),
                'isi_layanan' => $this->input->post('isi_layanan')
              
                
            );
//            $error = array(
//                'error' => $this->upload->display_errors()
//            );
//            echo json_encode($error);
        }


        $this->Layanan_m->edit_db($id_layanan, $data);
        redirect('Layanan');
    }

    function editFile() {
        $id_layanan = $this->input->post('id_layanan');
        $nm_file = $this->input->post('nm_file');
        $config['upload_path'] = './assets/document/';
        $config['allowed_types'] = 'pdf|doc';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('file')) {
            $gambar = $this->upload->data();
            $data = array(
                'nama_layanan' => $this->input->post('nama_layanan'),             
                'isi_layanan' => $this->input->post('isi_layanan'),
                'file' => $file['file_name']
            );
        } else {
            $data = array(
                'nama_layanan' => $this->input->post('nama_layanan'),
                'isi_layanan' => $this->input->post('isi_layanan')
              
                
            );
//            $error = array(
//                'error' => $this->upload->display_errors()
//            );
//            echo json_encode($error);
        }


        $this->Layanan_m->edit_db($id_layanan, $data);
        redirect('Layanan');
    }
}


