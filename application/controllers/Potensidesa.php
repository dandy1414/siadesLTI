<?php

/**
 * 
 */
class Potensidesa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }

    function form() {
        $this->load->view('potensidesa_form_v');
    }

    function insert() {
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('in_gambar')) {
            $foto = $this->upload->data();
            $data = array(
                'gambar' => $foto['file_name'],
                'nama_desa' => $this->input->post('in_nama_desa'),
                'keterangan' => $this->input->post('in_keterangan'));

            $this->Potensidesa_m->insert_db($data);
            $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
        } else {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        } redirect('Potensidesa/index');
    }

    function index() {
        $this->load->view('potensidesa_v');
    }

    function delete($id) {
		$data = $this->select_by($id);
		unlink("./assets/upload/".$data[0]->gambar);
        $this->Potensidesa_m->delete_db($id);
        redirect('Potensidesa');
    }

    function select_by($id) {
        $data['potensidesa'] = $this->Potensidesa_m->select_by_db($id);
        $this->load->view('potensidesa_form_edit_v', $data);
    }

    function edit() {
        $id_potensi = $this->input->post('id');
        $nm_file = $this->input->post('nm_foto');
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('in_gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                'nama_desa' => $this->input->post('in_nama_desa'),
                'keterangan' => $this->input->post('in_keterangan'),
                'gambar' => $gambar['file_name']
            );
        } else {
            $data = array(
                'nama_desa' => $this->input->post('in_nama_desa'),
                'keterangan' => $this->input->post('in_keterangan')
            );

//            $error = array(
//                'error' => $this->upload->display_errors()
//            );
//            echo json_encode($error);
        }
        $this->Potensidesa_m->edit_db($id_potensi, $data);
        $this->session->set_flashdata('sukses', 'Data berhasil dirubah');
        redirect('Potensidesa/index');
    }

    
}
