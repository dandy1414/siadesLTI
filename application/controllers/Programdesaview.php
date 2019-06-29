<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Programdesaview
 *
 * @author Lenovo
 */
class Programdesaview extends CI_Controller{
    function form() {
        $this->load->view('programdesa_form_v');
    }

    function index() {
        $this->load->view('view_programdesa');
    }
}
