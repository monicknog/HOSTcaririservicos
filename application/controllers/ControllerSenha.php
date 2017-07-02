<?php

class ControllerSenha extends CI_Controller {

    public function EsqueciSenha() {
        $this->load->view('pagEsqueciSenha');
        $this->load->view('menu');
    }

}