<?php

class M_login extends CI_Model{
    
     public function _construct(){
        
                // Call the CI_Model constructor
                parent::__construct();
        }
    
    public function verifica_login($usuario, $senha){
        $this->db->where('email_usuario', $usuario);
        $this->db->where('senha_usuario', $senha);
        $this->db->where('status', 1);
        $query = $this->db->get('usuarios');
        
        return $query;
    }
    
    public function return_user($id){
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $query = $this->db->get('usuarios');
        
        return $query;
    }
}