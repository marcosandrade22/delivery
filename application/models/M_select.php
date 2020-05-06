<?php

class M_select extends CI_Model{
    
    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
             
        }
        
        function categorias($id = null){
         $query2 = $this->db->get('categorias');
            foreach ($query2->result() as $row2){
               
                        if($id == $row2->id_categoria){
                        echo '<option selected value="'.$row2->id_categoria.'">'.$row2->nome_categoria.'</option>';
                        }else{
                        echo '<option value="'.$row2->id_categoria.'">'.$row2->nome_categoria.'</option>';
                        }
                } 
           
            }

        
        function list_categorias(){
         $query2 = $this->db->get('categorias');
            foreach ($query2->result() as $row2){
               echo '<li><a href="'.base_url().'produtos/categoria/'.$row2->id_categoria.'">'.$row2->nome_categoria.'</a></li>';
            }
        }
        
         function list_paginas(){
         $query2 = $this->db->get('paginas');
            foreach ($query2->result() as $row2){
               echo '<li><a href="'.base_url().'produtos/detalhe/'.$row2->url_pagina.'">'.$row2->nome_pagina.'</a></li>';
            }
        }
      
}