<?php

class ModelLogin extends CI_Model {

        
    public function login($Email, $Senha_Login){
        
        $this->db->select('Email, Senha_Login');
        $this->db->from('login');
        $this->db->where('Email', $Email);
        $this->db->where('Senha_Login', $Senha_Login);
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
