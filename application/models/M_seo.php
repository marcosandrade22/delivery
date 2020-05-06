<?php

class M_seo extends CI_Model{

    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();

        }

      function seo($param){
            $this->db->where('tipo' , $param);
            $query = $this->db->get('seo');
            return $query;
        }

        function config(){

              $query = $this->db->get('config');
              return $query;
          }


}
