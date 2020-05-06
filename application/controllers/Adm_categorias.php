<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_categorias extends MY_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('M_categorias');
      $this->load->model('M_seo');

    }

    public function index(){
      $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
      $data['title'] = "Categorias - ".$data['nome_site'];

        $data['pagina'] = "Categorias";

        $data['categorias'] = $this->M_categorias->getcategorias()->result();


        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/categorias/v_categorias', $data);
        $this->load->view('admin/headers/v_footer');


    }

     public function nova_categoria(){
       $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
       $data['title'] = "Categorias - ".$data['nome_site'];
        $data['pagina'] = "Nova Categoria";

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/categorias/v_add_categoria', $data);
        $this->load->view('admin/headers/v_footer');
    }

    public function edit($id){
      $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
      $data['title'] = "Categorias - ".$data['nome_site'];
        $data['pagina'] = "Edição de Categoria";

        $result = $this->M_categorias->getcategorias_id($id);

        $data['id_categoria'] = $id;
        $data['nome_categoria'] = $result->row()->nome_categoria;
        $data['imagem_categoria'] = $result->row()->imagem_categoria;
        $data['bg_categoria'] = $result->row()->bg_categoria;

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/categorias/v_add_categoria', $data);
        $this->load->view('admin/headers/v_footer');
    }


    public function store(){
        $id = $this->input->post('id_categoria');
        $nome = $this->input->post('nome_categoria');
        $imagem = $this->input->post('imagem_categoria');
        $bg = $this->input->post('bg_categoria');


        $dados = array(
           'nome_categoria' => $nome,
           'imagem_categoria' => $imagem,
            'bg_categoria' => $bg,
        );

        if($this->M_categorias->store($dados, $id)){
         echo '<script>alert("Salvo com sucesso!"), history.go(-2);</script>'  ;
        }
        else{
            echo '<script>alert("Erro ao salvar"), history.go(-1);</script>'  ;
        }

    }


     public function ajax_delete($id)
    {

       if($this->M_categorias->delete_by_id($id) == "Success"){
        echo json_encode(array("status" => TRUE));
       }else{
        echo json_encode(array("status" => FALSE));
       }

    }

}
