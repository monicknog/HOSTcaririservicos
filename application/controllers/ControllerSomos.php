<?php

class ControllerSomos extends CI_Controller {

    public function quemSomos() {
        $this->load->view('menu');
        $this->load->view('pagQuemSomos');
    }

}
