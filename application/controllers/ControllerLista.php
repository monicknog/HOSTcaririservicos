<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLista extends CI_Controller {

    public function t() {
        $this->load->view('menu');
        $this->load->view('perfil');
    }

    public function listar() {
        $this->load->Model('ModelLista', '', TRUE);
        $config = array(
            "base_url" => base_url('/ControllerLista/listar/servico_aux/'),
            "per_page" => 8, //itens por pagina
            "num_link" => 4, //num_link
            "total_rows" => $this->ModelLista->CountAll(),
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "<<",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => ">>",
            "num_links" => "1",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['servico_aux'] = $this->ModelLista->GetAll($config['per_page'], $this->uri->segment(4));
        $this->load->view('menu');
        $this->load->view('lista', $data);
    }

    public function filtroDuplo($servico, $localizacao) {
        $this->load->Model('ModelLista', '', TRUE);
        $config = array(
            "base_url" => base_url('/ControllerLista/listar/servico_aux/'),
            "per_page" => 8, //itens por pagina
            "num_link" => 4, //num_link
            "total_rows" => $this->ModelLista->contadorComposto($servico, $localizacao),
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "<<",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => ">>",
            "num_links" => "1",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['servico_aux'] = $this->ModelLista->filtroComposto($servico, $localizacao);
        $this->load->view('menu');
        $this->load->view('lista', $data);
    }

    public function filtroServico($servico) {
        $this->load->Model('ModelLista', '', TRUE);
        $config = array(
            "base_url" => base_url('/ControllerLista/listar/servico_aux/'),
            "per_page" => 8, //itens por pagina
            "num_link" => 4, //num_link
            "total_rows" => $this->ModelLista->contadorServico($servico),
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "<<",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => ">>",
            "num_links" => "1",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['servico_aux'] = $this->ModelLista->filtroServico($servico);
        $this->load->view('menu');
        $this->load->view('lista', $data);
    }

    public function filtroLocalizacao($localizacao) {
        $this->load->Model('ModelLista', '', TRUE);
        $config = array(
            "base_url" => base_url('/ControllerLista/listar/servico_aux/'),
            "per_page" => 8, //itens por pagina
            "num_link" => 4, //num_link
            "total_rows" => $this->ModelLista->contadorServico($localizacao),
            "full_tag_open" => "<ul class='pagination'>",
            "full_tag_close" => "</ul>",
            "first_link" => FALSE,
            "last_link" => FALSE,
            "first_tag_open" => "<li>",
            "first_tag_close" => "</li>",
            "prev_link" => "<<",
            "prev_tag_open" => "<li class='prev'>",
            "prev_tag_close" => "</li>",
            "next_link" => ">>",
            "num_links" => "1",
            "next_tag_open" => "<li class='next'>",
            "next_tag_close" => "</li>",
            "last_tag_open" => "<li>",
            "last_tag_close" => "</li>",
            "cur_tag_open" => "<li class='active'><a href='#'>",
            "cur_tag_close" => "</a></li>",
            "num_tag_open" => "<li>",
            "num_tag_close" => "</li>"
        );
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['servico_aux'] = $this->ModelLista->filtroLocalizacao($localizacao);
        $this->load->view('menu');
        $this->load->view('lista', $data);
    }

    public function filtrar() {
        $servico = $this->input->post("BuscaServico");
        $localizacao = $this->input->post("Cidade");
        if ($servico != NULL && $localizacao != "SF") {
            $this->filtroDuplo($servico, $localizacao);
        } else if ($servico != NULL && $localizacao == "SF") {
            $this->filtroServico($servico);
        } else if ($servico == NULL && $localizacao != "SF") {
            $this->filtroLocalizacao($localizacao);
        } else {
            $this->listar();
        }
    }

}
