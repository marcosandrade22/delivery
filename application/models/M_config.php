<?php

class M_config extends CI_Model{
    
     public function _construct(){
        
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        
        public function getconfig() {
           $query = $this->db->get('config');
           return $query;
            
        }
        
         public function store($dados = null) {
		
		if ($dados) {
			if ($this->db->update("config", $dados)) {
			return true;
			} else {
			return false;
			}
		}
		
	}
        
        
}