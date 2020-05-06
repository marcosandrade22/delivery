<?php

class M_slides extends CI_Model{
    
     public function _construct(){
        
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function getslides() {
           $query = $this->db->get('slides');
           return $query;
            
        }
        
         public function getslides_id($id) {
           $this->db->where('id_slide', $id);
           $query = $this->db->get('slides');
           return $query;
            
        }
        
        
        
         public function store($dados = null, $id = null) {
		
		if ($dados) {
			if ($id) {
				$this->db->where('id_slide', $id);
                               if ($this->db->update("slides", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("slides", $dados)) {
					return true;
				} else {
					return false;
				}
				
			}
		}
		
	}
        
        
        public function delete_by_id($id)
        {
             $this->db->where('id_slide', $id);
             $this->db->delete('slides');
            
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