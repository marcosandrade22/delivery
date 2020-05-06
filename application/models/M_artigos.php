<?php
class M_artigos extends CI_Model {
  
    var $table = 'artigos';
    var $column_order = array('id_artigo','titulo_artigo','categoria_artigo','nome_categoria','status_artigo'); //set column field database for datatable orderable
    var $column_search = array('id_artigo','titulo_artigo','categoria_artigo', 'nome_categoria','status_artigo'); //set column field database for datatable searchable just 
    function __construct() {
        parent::__construct();
    }
    
       private function _get_datatables_query()
    {
        $this->db->from($this->table);
        $i = 0;
      foreach ($this->column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
            
        }
    }
      function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->order_by('data_criacao', 'DESC');
        $this->db->join('categorias', 'categorias.id_categoria=artigos.categoria_artigo','left');
        $this->db->join('usuarios', 'usuarios.id=artigos.usuario_artigo','left');
        $query = $this->db->get();
        return $query->result();
   
   
    }
    
     public function count_all()
    {
         $this->db->order_by('data_criacao', 'DESC');
        $this->db->join('categorias', 'categorias.id_categoria=artigos.categoria_artigo','left');
        $this->db->join('usuarios', 'usuarios.id=artigos.usuario_artigo','left');
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
     function count_filtered()
    {
        $this->_get_datatables_query();
        $this->db->order_by('data_criacao', 'DESC');
        $this->db->join('categorias', 'categorias.id_categoria=artigos.categoria_artigo','left');
        $this->db->join('usuarios', 'usuarios.id=artigos.usuario_artigo','left');
       $query = $this->db->get();
        return $query->num_rows();
    }
    
     public function getcategorias() {
           $query = $this->db->get('categorias');
           return $query;
            
        }
        
    
     public function getuartigos_id($id) {
           $this->db->where('id_artigo', $id);
           $query = $this->db->get('artigos');
           return $query;
            
        }
    
    
     public function store($dados = null, $id = null) {
		
		if ($dados) {
			if ($id) {
				$this->db->where('id_artigo', $id);
                               if ($this->db->update("artigos", $dados)) {
					return true;
				} else {
					return false;
				}
			} else {
				if ($this->db->insert("artigos", $dados)) {
					return true;
				} else {
					return false;
				}
				
			}
		}
		
	}
    
        
     public function get_artigo_id($id){
           $this->db->where('status_artigo', 1);
           $this->db->where('url_amiga',$id);
           $this->db->join('categorias', 'categorias.id_categoria=artigos.categoria_artigo');
           $this->db->join('usuarios', 'usuarios.id=artigos.usuario_artigo');
           $query = $this->db->get('artigos');
           return $query;
       }
       
         public function get_artigo_relacionados($id, $categoria){
           $this->db->where('status_artigo', 1);
           $this->db->where('categoria_artigo', $categoria);
           $this->db->where('url_amiga !=',$id);
           $this->db->join('categorias', 'categorias.id_categoria=artigos.categoria_artigo');
           $this->db->join('usuarios', 'usuarios.id=artigos.usuario_artigo');
           $query = $this->db->get('artigos');
           return $query;
       }
       
        public function get_artigo_gostar($id, $categoria){
           $this->db->where('status_artigo', 1);
           $this->db->where('categoria_artigo !=', $categoria);
           $this->db->where('url_amiga !=',$id);
           $this->db->join('categorias', 'categorias.id_categoria=artigos.categoria_artigo');
           $this->db->join('usuarios', 'usuarios.id=artigos.usuario_artigo');
           $query = $this->db->get('artigos');
           return $query;
       }
       
        public function get_artigo_categoria($id){
           $this->db->where('status_artigo', 1);
           $this->db->where('categoria_artigo', $id);
           $this->db->join('categorias', 'categorias.id_categoria=artigos.categoria_artigo');
           $this->db->join('usuarios', 'usuarios.id=artigos.usuario_artigo');
           $query = $this->db->get('artigos');
           return $query;
       }
        public function get_artigo_categoria_rel($id, $limit){
            $this->db->limit($limit);
           $this->db->where('status_artigo', 1);
           $this->db->where('categoria_artigo !=', $id);
           $this->db->join('categorias', 'categorias.id_categoria=artigos.categoria_artigo');
           $this->db->join('usuarios', 'usuarios.id=artigos.usuario_artigo');
           $query = $this->db->get('artigos');
           return $query;
       }
       
       function update_counter($slug) { 
        $this->db->where('url_amiga', urldecode($slug)); 
        $this->db->set('acessos_artigo', ('acessos_artigo' + 1)); 
        $this->db->update('artigos'); 
        }
    
}