<?php

class M_usuarios extends CI_Model{
    
     public function _construct(){
        
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function getusuarios() {
           $query = $this->db->get('usuarios');
           return $query;
            
        }
        
        public function getusuarios_id($id) {
           $this->db->where('id', $id);
           $query = $this->db->get('usuarios');
           return $query;
            
        }
        
        
        
         public function store($dados = null, $id = null) {
		
		if ($dados) {
			if ($id) {
				$this->db->where('id', $id);
                               if ($this->db->update("usuarios", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("usuarios", $dados)) {
					return true;
				} else {
					return false;
				}
				
			}
		}
		
	}
        
        
        public function delete_by_id($id)
        {
             $this->db->where('id', $id);
             $this->db->delete('usuarios');
            
            if($this->db->error()['message']) {
            $result = 'Error! ['.$this->db->error()['message'].']';
            } else if (!$this->db->affected_rows()) {
            $result = 'Error! ID ['.$id.'] not found';
            } else {
            $result = 'Success';
            }
       
            return $result;
        }
        
}