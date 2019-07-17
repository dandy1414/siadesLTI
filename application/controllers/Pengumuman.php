<?php
class Pengumuman extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }
    
    function form() {     
        $this->load->view('pengumuman_form_v');
    }
    
    function insert() { 
         $nm_file = time() . '.png';   
         $config['upload_path'] = './assets/upload_pengumuman/';
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;   
         $config['overwrite'] = TRUE;
         $this->upload->initialize($config);
         
         if ($this->upload->do_upload('in_gambar'))
             {   
             $gambar = $this->upload->data();   
             $data = array(       
                 'judul' => $this->input->post('in_judul'),
                 'isi' => $this->input->post('isi'),       
                 'gambar' => $gambar['file_name']);    
             $this->Pengumuman_m->insert_db($data);
         
         } 
         else {   
             $error = array(   
                 'error' => $this->upload->display_errors()   
                     );  
             echo json_encode($error);
         
         } 
         redirect('Pengumuman');
    }   
    
    function index() {     
        $this->load->view('pengumuman_v');
        
    }
    
    function delete($id) {       
        $this->Pengumuman_m->delete_db($id);       
    redirect('Pengumuman');
    
    } 
    
    function select_by($id) {
        $data['pengumuman'] = $this->Pengumuman_m->select_by_db($id);
        $this->load->view('pengumuman_form_edit_v', $data);
    
    } 
    
    function edit() {
         $id = $this->input->post('id');   
         $nm_file = $this->input->post('nm_foto');  
         $config['upload_path'] = './assets/upload_pengumuman/';  
         $config['allowed_types'] = 'jpg|jpeg|png';   
         $config['file_name'] = $nm_file;
         $config['overwrite'] = TRUE;   
         $this->upload->initialize($config);
         if ($this->upload->do_upload('in_gambar')) 
             { 
             $gambar = $this->upload->data(); 
             $data = array(
             'judul' => $this->input->post('in_judul'),
             'isi' => $this->input->post('in_isi'),
             'gambar' => $gambar['file_name'],
              'tanggal' => date('Y-m-d H:i:s')  
         );
         } else {
             $data = array(
                 'judul' => $this->input->post('in_judul'),
                 'isi' => $this->input->post('in_isi'),
                 'tanggal' => $this->input->post('in_tanggal'),
                 );  
         
         } 
         $this->Pengumuman_m->edit_db($id, $data);
         redirect('Pengumuman');
         
        
    }      
}