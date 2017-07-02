<?php

class ControllerGeral extends CI_Controller {

    public function index() {
        $this->load->view('index.php');
        $this->load->view('PagCadastro');
    }

}
