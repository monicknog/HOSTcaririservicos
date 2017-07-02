<?php

class ControllerLogin extends CI_Controller {

    public function logar() {
        $this->load->view('menu');
    }

    public function conferirLogin() {

        $this->form_validation->set_rules('Usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('Senha', 'Senha', 'required|callback_verificarUsuario');

        if ($this->form_validation->run() == false) {
            $this->load->view('loginError');
        } else {
            $this->load->Model('ModelPerfil', '', TRUE);
            $Usuario = $this->input->post('Usuario');
            
            $_SESSION['username'] = (string) $Usuario;
            $_SESSION['logged_in'] = (bool) true;
            
            /*$usuario = $this->ModelPerfil->colherID($this->input->post('Usuario'));
            $data['area'] = $this->ModelPerfil->areas();
            $data['servico_aux'] = $this->ModelPerfil->colherDados($usuario);
            $data['servico'] = $this->ModelPerfil->colherServicos($usuario);
            $data['qualificacao'] = $this->ModelPerfil->colherQualificacao($usuario);
            $data['idiomas'] = $this->ModelPerfil->colherIdioma($usuario);
            $data['listaQualificacao'] = $this->ModelPerfil->listaQualificacao();
            $data['listaIdioma'] = $this->ModelPerfil->listaIdiomas();
            $data['listaNivel'] = $this->ModelPerfil->listaNivel();
            $this->load->view('menu');
            $this->load->view('perfil', $data);*/
         redirect('ControllerPerfil/perfilUsuario');
        }
    }

    public function verificarUsuario() {
        $Usuario = $this->input->post('Usuario');
        $Senha = /* colocar o md5 aqui */md5($this->input->post('Senha'));

        $this->load->Model('ModelLogin');

        if ($this->ModelLogin->login($Usuario, $Senha)) {
            return true;
        } else {
            $this->form_validation->set_message('verificarUsuario', 'Usuario ou senha Incorreto.');
            return false;
        }
    }







     /*public function perfil() {

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
        }
    }*/
    
        public function logout() {
		
		// create the data object

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
                        $this->load->view('menu');
                        $this->load->view('index');
                        
                }else{
                            redirect('/');
                        }
	

}
}