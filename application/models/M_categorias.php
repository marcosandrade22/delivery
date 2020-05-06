<?php

class M_categorias extends CI_Model{
    
     public function _construct(){
        
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function getcategorias() {
           $query = $this->db->get('categorias');
           return $query;
            
        }
        
        public function getcategorias_id($id) {
           $this->db->where('id_categoria', $id);
           $query = $this->db->get('categorias');
           return $query;
            
        }
        
        
        
         public function store($dados = null, $id = null) {
		
		if ($dados) {
			if ($id) {
				$this->db->where('id_categoria', $id);
                               if ($this->db->update("categorias", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("categorias", $dados)) {
					return true;
				} else {
					return false;
				}
				
			}
		}
		
	}
        
        
        public function delete_by_id($id)
        {
             $this->db->where('id_categoria', $id);
             $this->db->delete('categorias');
            
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