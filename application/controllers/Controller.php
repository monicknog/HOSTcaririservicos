<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller extends CI_Controller {

    public function perfil() {
        $this->load->view('menu');
        $this->load->view('perfil');
    }
    
    function index() {
        $this->load->view('menu');
        $this->load->view('index');
    }

}
