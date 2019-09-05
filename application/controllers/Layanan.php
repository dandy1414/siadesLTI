<?php

class Layanan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }

    function form() {
        $this->load->view('layanan_form_v');
    }

    function insert() {

		$img = null;
		$file_name = null;

        if(!empty($_FILES['gambar']['name'])){
            $nm_file = time() . '.png';
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $nm_file;
            $config['overwrite'] = TRUE;
            $img = '';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                $img = $gambar['file_name'];
            } else {
                $error = array(
                    'error' => $this->upload->display_errors()
                );
                echo json_encode($error);
            }
		}
		
	
        if(!empty($_FILES['file']['name'])){
            $nm_file = time() . '.pdf';
            $config['upload_path'] = './assets/document/';
            $config['allowed_types'] = 'pdf|doc';
            $config['file_name'] = $nm_file;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
				$file = $this->upload->data();
				$file_name = $file['file_name'];
            } else {
                $error = array(
                    'error' => $this->upload->display_errors()
                );
                echo json_encode($error);
            }
        }

        $data = array(
            'nama_layanan' => $this->input->post('nama_layanan'),
            'isi_layanan' => $this->input->post('isi_layanan'),
            'file' => $file_name, 
            'gambar' => $img
        );
        $this->Layanan_m->insert_db($data);
        $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
        redirect('Layanan/index');
	}
	

	function edit() {
		$id_layanan = $this->input->post('id_layanan');


        if(!empty($_FILES['gambar']['name'])){
            $nm_file = time() . '.png';
            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $nm_file;
            $config['overwrite'] = TRUE;
            $img = '';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                $img = $gambar['file_name'];
            } else {
                $error = array(
                    'error' => $this->upload->display_errors()
                );
                echo json_encode($error);
			}
			
			$data = array(
				'nama_layanan' => $this->input->post('nama_layanan'),
				'isi_layanan' => $this->input->post('isi_layanan'),
				'gambar' => $img
			);
		}
		
	
        if(!empty($_FILES['file']['name'])){
            $nm_file = time() . '.pdf';
            $config['upload_path'] = './assets/document/';
            $config['allowed_types'] = 'pdf|doc';
            $config['file_name'] = $nm_file;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {
				$file = $this->upload->data();
				$file_name = $file['file_name'];
            } else {
                $error = array(
                    'error' => $this->upload->display_errors()
                );
                echo json_encode($error);
			}
			$data = array(
				'nama_layanan' => $this->input->post('nama_layanan'),
				'isi_layanan' => $this->input->post('isi_layanan'),
				'file' => $file_name, 
			);
		}
		
		if(empty($_FILES['file']['name']) && empty($_FILES['gambar']['name']) ){
			$data = array(
				'nama_layanan' => $this->input->post('nama_layanan'),
				'isi_layanan' => $this->input->post('isi_layanan'),
			);
		}else if(!empty($_FILES['file']['name']) && !empty($_FILES['gambar']['name'])){
			$data = array(
				'nama_layanan' => $this->input->post('nama_layanan'),
				'isi_layanan' => $this->input->post('isi_layanan'),
				'file' => $file_name, 
				'gambar' => $img
			);	
		}


		$this->Layanan_m->edit_db($id_layanan, $data);
        $this->session->set_flashdata('sukses', 'Data berhasil dirubah');
        redirect('Layanan/index');
	}


    function index() {
        $this->load->view('layanan_v');
    }

    function delete($id) {
		$data = $this->Layanan_m->select_by_db($id);
		unlink("./assets/upload/".$data[0]->gambar);
		unlink("./assets/document/".$data[0]->file);

        $this->Layanan_m->delete_db($id);
        redirect('Layanan');
    }

    function select_by($id) {
        $data['layanan'] = $this->Layanan_m->select_by_db($id);
        $this->load->view('layanan_form_edit_v', $data);
	}
	
	

//     function edit() {
//         $id_layanan = $this->input->post('id_layanan');
//         $nm_file = $this->input->post('nm_foto');
//         $config['upload_path'] = './assets/upload/';
//         $config['allowed_types'] = 'jpg|jpeg|png';
//         $config['file_name'] = $nm_file;
//         $config['overwrite'] = TRUE;
//         $this->upload->initialize($config);

//         if ($this->upload->do_upload('gambar')) {
//             $gambar = $this->upload->data();
//             $data = array(
//                 'nama_layanan' => $this->input->post('nama_layanan'),             
//                 'isi_layanan' => $this->input->post('isi_layanan'),
//                 'gambar' => $gambar['file_name']
//             );
//         } else {
//             $data = array(
//                 'nama_layanan' => $this->input->post('nama_layanan'),
//                 'isi_layanan' => $this->input->post('isi_layanan')   
//             );
// //            $error = array(
// //                'error' => $this->upload->display_errors()
// //            );
// //            echo json_encode($error);
//         }
//         $this->Layanan_m->edit_db($id_layanan, $data);
//         $this->session->set_flashdata('sukses', 'Data berhasil dirubah');
//         redirect('Layanan/index');
//     }
}


