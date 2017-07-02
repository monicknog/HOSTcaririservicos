<?php

class ControllerPerfil extends CI_Controller {

    public function perfilUsuario() {
        
        if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true){
            $this->load->Model('ModelPerfil', '', TRUE);
           
            
            $id = $_SESSION['username'];
            
            $usuario = $this->ModelPerfil->colherID($id);
            $data['area'] = $this->ModelPerfil->areas();
            $data['servico_aux'] = $this->ModelPerfil->colherDados($usuario);
            $data['servico'] = $this->ModelPerfil->colherServicos($usuario);
            $data['qualificacao'] = $this->ModelPerfil->colherQualificacao($usuario);
            $data['idiomas'] = $this->ModelPerfil->colherIdioma($usuario);
            $data['listaQualificacao'] = $this->ModelPerfil->listaQualificacao();
            $data['listaIdioma'] = $this->ModelPerfil->listaIdiomas();
            $data['listaNivel'] = $this->ModelPerfil->listaNivel();
            $this->load->view('menu');
            $this->load->view('perfil', $data);
        }else{
            rediret('/');
        }
        
    }

    public function cadastrarServicos() {
        $this->load->Model('ModelCadastro', '', TRUE);
        $servico = array(
            'ID_Area' => $this->input->post('ID_Area'),
            'Nome_Servico' => $this->input->post('Nome_Servico'),
            'Detalhe_Servico' => $this->input->post('Detalhe_Servico')
        );
        $idServico = $this->ModelCadastro->inserirServico($servico);
        $idUsuario = $this->input->post('ID_Usuario');
        $servico_aux = array(
            'ID_Usuario' => $idUsuario,
            'ID_Servico' => $idServico
        );
        $retorno = $this->ModelCadastro->inserirServicoAux($servico_aux);
        echo json_encode($retorno);
    }

    public function atualizarServico() {
        $this->load->Model('ModelCadastro', '', TRUE);
        $idServico = $this->input->post('ID_Servico');
        $servico = array(
            'ID_Area' => $this->input->post('ID_Area'),
            'Nome_Servico' => $this->input->post('Nome_Servico'),
            'Detalhe_Servico' => $this->input->post('Detalhe_Servico')
        );
        $retorno = $this->ModelCadastro->atualizarServico($servico, $idServico);
        echo json_encode($retorno);
    }

    public function atualizarDadosPessoais() {
        $this->load->Model('ModelCadastro', '', TRUE);
        $ID_Usuario = $this->input->post('ID_Usuario');
        $localizacao = array(
            'CEP' => $this->input->post('CEP'),
            'Rua' => $this->input->post('Rua'),
            'Bairro' => $this->input->post('Bairro'),
            'Cidade' => $this->input->post('Cidade'),
            'Estado' => $this->input->post("UF"),
            'Numero_End' => $this->input->post('Numero'),
            'Complemento' => $this->input->post('Complemento')
        );
        $usuario = array(//Organizando o ARRAY($usuario) para preenchimento da tabela USUÁRIO;
            'Nome_Usuario' => $this->input->post("Nome_Usuario"),
            'Data_Nascimento' => $this->input->post("Data_Nascimento"),
            'Sexo' => $this->input->post("Sexo"), // 1 -> Homem 2-> Mulher 3->Outros
            'CPF' => $this->input->post("CPF")
        );
        $contato = array(
            'Telefone1' => $this->input->post("Telefone1"),
            'Telefone2' => $this->input->post("Telefone2")
        );
        $retorno = $this->ModelCadastro->atualizarDadosPessoais($ID_Usuario, $localizacao, $usuario, $contato);
        echo json_encode($retorno);
    }

    public function atualizarQualificacao() {
        $this->load->Model('ModelCadastro', '', TRUE);
        $ID_Usuario = $this->input->post('ID_Usuario');
        $ID_Qualificacao = $this->input->post('ID_Qualificacao');
        $qualificacao = array(
            'ID_Grau' => $this->input->post('ID_Grau'),
            'Nome_Curso' => $this->input->post('Nome_Curso'),
            'Instituicao' => $this->input->post('Instituicao'),
            'Duracao' => $this->input->post('Duracao')
        );
        $idioma_usuario = array(
            'ID_Idioma' => $this->input->post('ID_Idioma'),
            'ID_Usuario' => $ID_Usuario ,
            'ID_Nivel' => $this->input->post('ID_Nivel')
        );
        $retorno = $this->ModelCadastro->atualizarQualificoes($qualificacao, $idioma_usuario, $ID_Usuario, $ID_Qualificacao);
        echo json_encode($retorno);
    }

}
