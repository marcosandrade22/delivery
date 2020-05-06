<?php

class M_paginas extends CI_Model{
    
     public function _construct(){
        
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function getpaginas() {
           $query = $this->db->get('paginas');
           return $query;
            
        }
        
        public function getpaginas_id($id) {
           $this->db->where('id_pagina', $id);
           $query = $this->db->get('paginas');
           return $query;
            
        }
        public function getpaginas_url($id) {
           $this->db->where('url_pagina', $id);
           $query = $this->db->get('paginas');
           return $query;
            
        }
        
        
        
         public function store($dados = null, $id = null) {
		
		if ($dados) {
			if ($id) {
				$this->db->where('id_pagina', $id);
                               if ($this->db->update("paginas", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("paginas", $dados)) {
					return true;
				} else {
					return false;
				}
				
			}
		}
		
	}
        
        
        public function delete_by_id($id)
        {
             $this->db->where('id_pagina', $id);
             $this->db->delete('paginas');
            
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