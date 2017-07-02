<?php

class ModelCadastro extends CI_Model {

    public function puxarNivel() {
        $query = $this->db->select('*')
                ->from('nivel')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function puxarGrau() {
        $query = $this->db->select('*')
                ->from('grau')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function puxarIdiomas() {
        $query = $this->db->select('*')
                ->from('idiomas')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function puxarArea() {
        $query = $this->db->select('*')
                ->from('area')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function consultaInicial($inf2) {
        /* $inf1 = CPF  $inf2 = Email  $inf3 = Usuario_Login */
        $query2 = $this->db->select('*')
                ->from('login')
                ->where('Email', $inf2)
                ->get();

        if ($query2->num_rows() > 0) {
            return 0;
        } else {
            return null;
        }
    }

    public function consultaCPF($cpf) {
        $query2 = $this->db->select('*')
                ->from('usuario')
                ->where('CPF', $cpf)
                ->get();

        if ($query2->num_rows() > 0) {
            return 0;
        } else {
            return null;
        }
    }

    public function inserirDados($contato, $localizacao, $login, $servico_aux, $idioma_usuario, $qualificacao_usuario) {
        $this->db->insert('contato', $contato);
        $this->db->insert('localizacao', $localizacao);
        $this->db->insert('login', $login);
        $this->db->insert('servico_aux', $servico_aux);
        $this->db->insert('idioma_usuario', $idioma_usuario);
        $this->db->insert('qualificacao_usuario', $qualificacao_usuario);
    }

    public function inserirQualificacao($qualificacao) {
        $this->db->insert('qualificacao', $qualificacao);
        $query = $this->db->insert_id();
        return $query;
    }

    public function inserirUsuario($usuario) {
        $this->db->insert('usuario', $usuario);
        $query = $this->db->insert_id();
        return $query;
    }

    public function inserirServico($servico) {
        $this->db->insert('servico', $servico);
        $query = $this->db->insert_id();
        return $query;
    }

    public function inserirCaminhoImagem($url) {
        $this->db->insert('img_perfil', $url);
    }

    public function inserirServicoAux($servico_aux) {
        $this->db->insert('servico_aux', $servico_aux);
        $query = $this->db->insert_id();
        return $query;
    }

    //Função feita para Igualar os IDS da tabela USUARIOS e permitir o relacionamento!
    public function uparDados($id) {
        $this->db->query("UPDATE `usuario` SET `ID_Contato`=ID_Usuario,`ID_Localizacao`=ID_Usuario,`ID_Login`=`ID_Usuario`, `ID_Foto`=ID_Usuario WHERE ID_Usuario='$id'");
    }

    public function atualizarServico($servico, $idServico) {
        $this->db->update('servico', $servico, "ID_Servico = $idServico");
        return TRUE;
    }

    public function atualizarDadosPessoais($ID_Usuario, $localizacao, $usuario, $contato) {
        $this->db->update('localizacao', $localizacao, "ID_Localizacao = $ID_Usuario");
        $this->db->update('usuario', $usuario, "ID_Usuario = $ID_Usuario");
        $this->db->update('contato', $contato, "ID_Contato = $ID_Usuario");
        return TRUE;
    }

    public function atualizarQualificoes($qualificacao, $idioma_usuario, $ID_Usuario, $ID_Qualificacao) {
        $this->db->update('qualificacao', $qualificacao, "ID_Qualificacao = $ID_Qualificacao");
        $this->db->update('idioma_usuario', $idioma_usuario, "ID_Usuario = $ID_Usuario");
        return TRUE;
    }

}
