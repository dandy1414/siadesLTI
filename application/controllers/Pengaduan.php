<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pengaduan
 *
 * @author Lenovo
 */
class Pengaduan extends CI_Controller {

    function form() {
        $this->load->view('pengaduan_form_v');
    }

    function insert() {
        $data = array(
            'username' => $this->input->post('in_username'),
            'keluhan' => $this->input->post('in_keluhan'));
        $this->Pengaduan_m->insert_db($data);
        redirect('Pengaduan/form');
    }

    function index() {
        $this->load->view('pengaduan_v');
    }
    
    function delete($id) {       
        $this->Pengaduan_m->delete_db($id);       
    redirect('Pengaduan');
    
    } 
    
    function select_by($id) {
        $data['pengaduan'] = $this->Pengaduan_m->select_by_db($id);
        $this->load->view('pengaduan_form_edit_v', $data);
    
    }
    
    function edit(){
        $id = $this->input->post('id');
        $data = array(
         'keluhan' => $this->input->post('in_keluhan'));   
        
        $this->Pengaduan_m->edit_db($id, $data);
        redirect('Pengaduan');
    }
    

}
