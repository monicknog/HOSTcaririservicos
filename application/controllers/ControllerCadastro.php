<?php

class ControllerCadastro extends CI_Controller {

//Página do Primeiro passo do Cadastro!
    public function primeiroPasso() {
         if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) {
            redirect('/');
        }else{
        $this->load->view('menu');
        $this->load->view('pagCadTrabalhador');
        }
    }

    public function segundoPasso() {
        $this->load->library('session');
        $this->load->Model('ModelCadastro', '', TRUE);
        $inf2 = $this->input->post('Email');
        $s1 = $this->input->post('Senha');
        $s2 = $this->input->post('Senha1');
        $consultaInicial = $this->ModelCadastro->consultaInicial($inf2);
        if (isset($s1) && isset($s2) && isset($inf2)) {
            if (($consultaInicial === NULL) && ($s1 == $s2)) {
                $dados = array(
                    'NomeCompleto' => $this->input->post('NomeCompleto'),
                    'Email' => $this->input->post('Email'),
                    'Senha' => md5($this->input->post('Senha'))
                );
                $this->session->set_userdata($dados);
                $this->load->view('menu');
                $this->load->view('pagCadastro', $dados);
            } elseif ($consultaInicial == 0 && ($s1 == $s2)) {
                $data['msg'] = 'E-mail já cadastrado';
                $this->load->view('menu');
                $this->load->view('pagCadTrabalhador', $data);
            } elseif ($consultaInicial === NULL && ($s1 != $s2)) {
                $data['msg'] = 'As senhas não conferem';
                $this->load->view('menu');
                $this->load->view('pagCadTrabalhador', $data);
            }
        } else {
            header("location: http://damascenohost.net");
        }
    }

    public function terceiroPasso() {
        $this->load->library('session');
        $this->load->Model('ModelCadastro', '', TRUE);
        $required = $this->input->post('CPF');
        if (isset($required)) {

            $folder = random_string('alpha');
            $path = "./uploads/" . $folder;
            //verificamos se o diretório existe, se não exite criamos com permissão de leitura e escrita
            if (!is_dir($path)) {
                mkdir($path, 0777, $recursive = true);
            }

            $config_image['upload_path'] = $path;
            $config_image['allowed_types'] = 'jpg|gif|png|jpeg';
            $config_image['max_size'] = '1024';
            $config_image['encrypt_name'] = TRUE;

            $this->upload->initialize($config_image);
            if (!$this->upload->do_upload('upload')) {
                $url = base_url('img/img_perf.png');
            } else {
                $data['dadosArquivo'] = $this->upload->data();
                $arquivoPath = 'uploads/' . $folder . "/" . $data['dadosArquivo']['file_name'];
                $data['urlArquivo'] = base_url($arquivoPath);
                $url = base_url($arquivoPath);
            }

            $usuario = array(//Organizando o ARRAY($usuario) para preenchimento da tabela USUÁRIO;
                'Nome_Usuario' => $this->session->NomeCompleto,
                'Data_Nascimento' => $this->input->post('dataNasc'),
                'Sexo' => $this->input->post('Sexo'), // 1 -> Homem 2-> Mulher 3->Outros
                'CPF' => $this->input->post('CPF'),
                'Telefone1' => $this->input->post('Telefone1'),
                'Telefone2' => $this->input->post('Telefone2'),
                'CEP' => $this->input->post('CEP'),
                'Rua' => $this->input->post('Rua'),
                'Bairro' => $this->input->post('Bairro'),
                'Cidade' => $this->input->post('Cidade'),
                'Estado' => $this->input->post('Estado'),
                'Numero_End' => $this->input->post('Numero'),
                'Complemento' => $this->input->post('Complemento'),
                'Email' => $this->session->Email,
                'Senha_Login' => $this->session->Senha, //md5(string) criptografa a senha para md5
                'Url_Foto' => $url
            );
            $this->session->set_userdata($usuario);
            $this->session->unset_userdata('dados');
            $inf1 = $this->input->post('CPF');
            $consultaCPF = $this->ModelCadastro->consultaCPF($inf1);

            if ($consultaCPF === NULL) {
                $dados['grau'] = $this->ModelCadastro->puxarGrau();
                $dados['idiomas'] = $this->ModelCadastro->puxarIdiomas();
                $dados['nivel'] = $this->ModelCadastro->puxarNivel();
                $this->load->view('menu');
                $this->load->view('pagCadastroEscolaridade', $dados);
            } else if ($consultaCPF === 0) {
                $erroCad = array(
                    'NomeCompleto' => $this->input->post('Nome_Usuario'),
                    'Data_Nascimento' => $this->input->post('dataNasc'),
                    'Sexo' => $this->input->post('Sexo'), // 1 -> Homem 2-> Mulher 3->Outros
                    'CPF' => $this->input->post('CPF'),
                    'Telefone1' => $this->input->post('Telefone1'),
                    'Telefone2' => $this->input->post('Telefone2'),
                    'CEP' => $this->input->post('CEP'),
                    'Rua' => $this->input->post('Rua'),
                    'Bairro' => $this->input->post('Bairro'),
                    'Cidade' => $this->input->post('Cidade'),
                    'Estado' => $this->input->post('Estado'),
                    'Numero_End' => $this->input->post('Numero'),
                    'Complemento' => $this->input->post('Complemento'),
                    'Email' => $this->input->post('Email'),
                    'Senha' => $this->input->post('Senha'),
                    'Url_Foto' => $url
                );
                $erroCad['msg'] = 'CPF em uso, mais informações contate o administrador do sistema.';
                $this->load->view('menu');
                $this->load->view('pagCadastro', $erroCad);
            }
        } else {
            header("location: http://damascenohost.net");        }
    }

    public function quartoPasso() {
        $this->load->Model('ModelCadastro', '', TRUE);
        $this->load->library('session');
        $required2 = $this->input->post('ID_Grau');
        if (isset($required2)) {
            $usuario = array(
                'ID_Grau' => $this->input->post('ID_Grau'),
                'Nome_Curso' => $this->input->post('Nome_Curso'),
                'Instituicao' => $this->input->post('Instituicao'),
                'Duracao' => $this->input->post('Duracao'),
                'ID_Idioma' => $this->input->post('ID_Idioma'),
                'ID_Nivel' => $this->input->post('nivelIdioma')
            );
            $this->session->set_userdata($usuario);
            $dados['area'] = $this->ModelCadastro->puxarArea();
            $this->load->view('menu');
            $this->load->view('pagcadExperiencia', $dados);
        } else {
            header("location: http://damascenohost.net");        }
    }

    public function finalizarCadastro() {
        $this->load->library('session');
        $this->load->Model('ModelCadastro', '', TRUE);
        $required = $this->input->post('ID_Area');
        if (isset($required)) {
            $usuario = array(//Organizando o ARRAY($usuario) para preenchimento da tabela USUÁRIO;
                'Nome_Usuario' => $this->session->NomeCompleto,
                'Data_Nascimento' => $this->session->Data_Nascimento,
                'Sexo' => $this->session->Sexo, // 1 -> Homem 2-> Mulher 3->Outros
                'CPF' => $this->session->CPF
            );
            $contato = array(
                'Telefone1' => $this->session->Telefone1,
                'Telefone2' => $this->session->Telefone2
            );
            if (isset($this->session->Complemento)) {
                $complemento = $this->session->Complemento;
            } else {
                $complemento = 'Sem complemento';
            }
            $localizacao = array(
                'CEP' => $this->session->CEP,
                'Rua' => $this->session->Rua,
                'Bairro' => $this->session->Bairro,
                'Cidade' => $this->session->Cidade,
                'Estado' => $this->session->Estado,
                'Numero_End' => $this->session->Numero_End,
                'Complemento' => $complemento
            );
            $login = array(
                'Email' => $this->session->Email,
                'Senha_Login' => $this->session->Senha    //md5(string) criptografa a senha para md5
            );
            $servico = array(
                'ID_Area' => $this->input->post('ID_Area'),
                'Nome_Servico' => $this->input->post('Nome_Servico'),
                'Detalhe_Servico' => $this->input->post('Detalhe_Servico')
            );
            if (isset($this->session->Nome_Curso)) {
                $nomeCurso = $this->session->Nome_Curso;
            } else {
                $nomeCurso = 'Não informado';
            }
            if (isset($this->session->Instituicao)) {
                $instituicao = $this->session->Instituicao;
            } else {
                $instituicao = 'Não informado';
            }
            if (isset($this->session->Duracao)) {
                $duracao = $this->session->Duracao;
            } else {
                $duracao = 'Não informado';
            }
            $qualificacao = array(
                'ID_Grau' => $this->session->ID_Grau,
                'Nome_Curso' => $nomeCurso,
                'Instituicao' => $instituicao,
                'Duracao' => $duracao
            );
            $idQualificacao = $this->ModelCadastro->inserirQualificacao($qualificacao);
            $idServico = $this->ModelCadastro->inserirServico($servico);
            $idUsuario = $this->ModelCadastro->inserirUsuario($usuario);
            $qualificacao_usuario = array(
                'ID_Qualificacao' => $idQualificacao,
                'ID_Usuario' => $idUsuario
            );
            $servico_aux = array(
                'ID_Usuario' => $idUsuario,
                'ID_Servico' => $idServico
            );
            $idioma_usuario = array(
                'ID_Idioma' => $this->session->ID_Idioma,
                'ID_Usuario' => $idUsuario,
                'ID_Nivel' => $this->session->ID_Nivel
            );
            $img_perfil = array(
                'Url_Foto' => $this->session->Url_Foto
            );

            $this->ModelCadastro->inserirDados($contato, $localizacao, $login, $servico_aux, $idioma_usuario, $qualificacao_usuario); //Passagem de ARRAYS como parâmetros
            $this->ModelCadastro->inserirCaminhoImagem($img_perfil);
            $this->ModelCadastro->uparDados($idUsuario);
            $this->session->sess_destroy();
            header("location: http://damascenohost.net");        } else {
            header("location: http://damascenohost.net");        }
    }

    public function resize_image($path, $file) {
        $config_resize = array();
        $config_resize['image_library'] = 'gd2';
        $config_resize['source_image'] = $path;
        $config_resize['crate_thumb'] = FALSE;
        $config_resize['maintian_ratio'] = TRUE;
        $config_resize['width'] = 250;
        $config_resize['heigth'] = 250;
        $config_resize['new_image'] = $file;

        $this->load->library('image_lib', $config_resize);
        $this->image_lib->resize();
    }

}
