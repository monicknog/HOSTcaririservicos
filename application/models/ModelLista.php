<?php

class ModelLista extends CI_Model {

    var $table = "servico_aux";

    function GetAll($limit = null, $offset = null) {
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->select('usuario.*, servico.*, img_perfil.*, localizacao.*, contato.*,login.*')
                ->from('servico_aux')
                ->join('usuario', 'usuario.ID_Usuario = servico_aux.ID_Usuario')
                ->join('servico', 'servico.ID_Servico = servico_aux.ID_Servico')
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

    function CountAll() {
        return $this->db->count_all($this->table);
    }

    function listarAreas() {
        $resultado = $this->db->order_by('Nome_Area');
        $resultado = $this->db->get('area');
        return $resultado->result();
    }

    public function filtroComposto($servico, $localizacao) {
        $query = $this->db->select('usuario.*, servico.*, img_perfil.*, localizacao.*, contato.*,login.*')
                ->from('servico_aux')
                ->join('usuario', 'usuario.ID_Usuario = servico_aux.ID_Usuario')
                ->join('servico', 'servico.ID_Servico = servico_aux.ID_Servico')
                ->join('img_perfil', 'img_perfil.ID_Foto = usuario.ID_Foto')
                ->join('localizacao', 'localizacao.ID_Localizacao = usuario.ID_Localizacao')
                ->join('contato', 'contato.ID_Contato = usuario.ID_Contato')
                ->join('login', 'login.ID_Login = usuario.ID_Login')
                ->like('servico.Nome_Servico', "$servico")
                ->like('localizacao.Cidade', "$localizacao")
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function contadorComposto($servico, $localizacao) {
        $query = $this->db->select('usuario.*, servico.*, img_perfil.*, localizacao.*, contato.*,login.*')
                ->from('servico_aux')
                ->join('usuario', 'usuario.ID_Usuario = servico_aux.ID_Usuario')
                ->join('servico', 'servico.ID_Servico = servico_aux.ID_Servico')
                ->join('img_perfil', 'img_perfil.ID_Foto = usuario.ID_Foto')
                ->join('localizacao', 'localizacao.ID_Localizacao = usuario.ID_Localizacao')
                ->join('contato', 'contato.ID_Contato = usuario.ID_Contato')
                ->join('login', 'login.ID_Login = usuario.ID_Login')
                ->like('servico.Nome_Servico', "$servico")
                ->like('localizacao.Cidade', "$localizacao")
                ->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return null;
        }
    }

    public function filtroServico($servico) {
        $query = $this->db->select('usuario.*, servico.*, img_perfil.*, localizacao.*, contato.*,login.*')
                ->from('servico_aux')
                ->join('usuario', 'usuario.ID_Usuario = servico_aux.ID_Usuario')
                ->join('servico', 'servico.ID_Servico = servico_aux.ID_Servico')
                ->join('img_perfil', 'img_perfil.ID_Foto = usuario.ID_Foto')
                ->join('localizacao', 'localizacao.ID_Localizacao = usuario.ID_Localizacao')
                ->join('contato', 'contato.ID_Contato = usuario.ID_Contato')
                ->join('login', 'login.ID_Login = usuario.ID_Login')
                ->like('servico.Nome_Servico', "$servico")
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function contadorServico($servico) {
        $query = $this->db->select('usuario.*, servico.*, img_perfil.*, localizacao.*, contato.*,login.*')
                ->from('servico_aux')
                ->join('usuario', 'usuario.ID_Usuario = servico_aux.ID_Usuario')
                ->join('servico', 'servico.ID_Servico = servico_aux.ID_Servico')
                ->join('img_perfil', 'img_perfil.ID_Foto = usuario.ID_Foto')
                ->join('localizacao', 'localizacao.ID_Localizacao = usuario.ID_Localizacao')
                ->join('contato', 'contato.ID_Contato = usuario.ID_Contato')
                ->join('login', 'login.ID_Login = usuario.ID_Login')
                ->like('servico.Nome_Servico', "$servico")
                ->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return null;
        }
    }

    public function filtroLocalizacao($localizacao) {
        $query = $this->db->select('usuario.*, servico.*, img_perfil.*, localizacao.*, contato.*,login.*')
                ->from('servico_aux')
                ->join('usuario', 'usuario.ID_Usuario = servico_aux.ID_Usuario')
                ->join('servico', 'servico.ID_Servico = servico_aux.ID_Servico')
                ->join('img_perfil', 'img_perfil.ID_Foto = usuario.ID_Foto')
                ->join('localizacao', 'localizacao.ID_Localizacao = usuario.ID_Localizacao')
                ->join('contato', 'contato.ID_Contato = usuario.ID_Contato')
                ->join('login', 'login.ID_Login = usuario.ID_Login')
                ->like('localizacao.Cidade', "$localizacao")
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function contadorLocalizacao($localizacao) {
        $query = $this->db->select('usuario.*, servico.*, img_perfil.*, localizacao.*, contato.*,login.*')
                ->from('servico_aux')
                ->join('usuario', 'usuario.ID_Usuario = servico_aux.ID_Usuario')
                ->join('servico', 'servico.ID_Servico = servico_aux.ID_Servico')
                ->join('img_perfil', 'img_perfil.ID_Foto = usuario.ID_Foto')
                ->join('localizacao', 'localizacao.ID_Localizacao = usuario.ID_Localizacao')
                ->join('contato', 'contato.ID_Contato = usuario.ID_Contato')
                ->join('login', 'login.ID_Login = usuario.ID_Login')
                ->like('localizacao.Cidade', "$localizacao")
                ->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return null;
        }
    }

}
