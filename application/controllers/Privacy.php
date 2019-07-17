<?php
/**
 * 
 */
class Privacy extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== "admin"){
            redirect('Akunadmin/login');
		}
    }
	
	function form() {    
	 $this->load->view('privacy_form_v');
	} 

	function insert() { 
		$data = array(     
			'isi' => $this->input->post('in_isi'));  

			 $this->Privacy_m->insert_db($data); 
                         redirect('Privacy/form');
			}   

        function index() {     
            $this->load->view('privacy_v');
            
        }
        
        function delete($id) {       
            $this->Privacy_m->delete_db($id);       
            redirect('Privacy');
        
        } 
        
        function select_by($id) {
            $data['privacy'] = $this->Privacy_m->select_by_db($id);
            $this->load   ->view('privacy_form_edit_v', $data);
        
        }
        
        function edit() {$id = $this->input->post('id');
        $data = array(
            'isi' => $this->input->post('in_isi'));
            $this->Privacy_m->edit_db($id, $data);
            redirect('Privacy');
            
        }
            
 }