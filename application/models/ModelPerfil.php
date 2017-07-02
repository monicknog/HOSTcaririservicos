<?php

class ModelPerfil extends CI_Model {

    public function areas() {
        $query = $this->db->select('*')
                ->from('area')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function colherID($email) {
        $this->db->select('ID_Login')
                ->from('login')
                ->where('Email', "$email");

        return $this->db->get()->row('ID_Login');
    }

    public function colherDados($id) {
        $query = $this->db->select('usuario.*, img_perfil.*, localizacao.*, contato.*,login.*')
                ->where('usuario.ID_Usuario', "$id")
                ->from('usuario')
                ->join('img_perfil', 'img_perfil.ID_Foto = usuario.ID_Foto')
                ->join('localizacao', 'localizacao.ID_Localizacao = usuario.ID_Localizacao')
                ->join('contato', 'contato.ID_Contato = usuario.ID_Contato')
                ->join('login', 'login.ID_Login = usuario.ID_Login')
                ->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function colherServicos($id) {
        $query = $this->db->select('servico.*, area.*')
                ->where('servico_aux.ID_Usuario', "$id")
                ->from('servico_aux')
                ->join('servico', 'servico.ID_Servico = servico_aux.ID_Servico')
                ->join('area', 'area.ID_Area = servico.ID_Area')
                ->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function listaQualificacao() {
        $query = $this->db->select('*')
                ->from('grau')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function listaNivel() {
        $query = $this->db->select('*')
                ->from('nivel')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    public function listaIdiomas() {
        $query = $this->db->select('*')
                ->from('idiomas')
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    public function colherQualificacao($id) {
        $query = $this->db->select('qualificacao.*, usuario.*, grau.*')
                ->where('qualificacao_usuario.ID_Usuario', "$id")
                ->from('qualificacao_usuario')
                ->join('qualificacao', 'qualificacao.ID_Qualificacao = qualificacao_usuario.ID_Qualificacao')
                ->join('grau', 'grau.ID_Grau = qualificacao.ID_Grau')
                ->join('usuario', 'usuario.ID_Usuario = qualificacao_usuario.ID_Usuario')
                ->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    
    public function colherIdioma($usuario) {
        $query = $this->db->select('idiomas.*, usuario.*, nivel.*')
                ->where('idioma_usuario.ID_Usuario', "$usuario")
                ->from('idioma_usuario')
                ->join('idiomas', 'idiomas.ID_Idioma = idioma_usuario.ID_Idioma')
                ->join('nivel', 'nivel.ID_Nivel = idioma_usuario.ID_Nivel')
                ->join('usuario', 'usuario.ID_Usuario = idioma_usuario.ID_Usuario')
                ->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }
    

}
