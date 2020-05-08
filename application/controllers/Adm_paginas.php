<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_paginas extends MY_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('M_paginas');
      $this->load->library('url_amiga');
      $this->load->model('M_seo');
    }

    public function index(){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Páginas - ".$data['nome_site'];
        $data['pagina'] = "Páginas";
        $data['controller'] = "pagina";

        $data['paginas'] = $this->M_paginas->getpaginas()->result();


        $this->load->view('admin/headers_sb/v_header', $data);
        $this->load->view('admin/headers_sb/v_menu', $data);   

        $this->load->view('admin/paginas/v_paginas', $data);
        $this->load->view('admin/headers_sb/v_footer');


    }

    public function nova_pagina(){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Páginas - ".$data['nome_site'];
        $data['pagina'] = "Nova Página";
        $data['controller'] = "pagina";

        $this->load->view('admin/headers_sb/v_header', $data);
        $this->load->view('admin/headers_sb/v_menu', $data);   

        $this->load->view('admin/paginas/v_add_paginas', $data);
        $this->load->view('admin/headers_sb/v_footer');
    }

    public function edit($id){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Páginas - ".$data['nome_site'];
        $data['pagina'] = "Edição de Página";
        $data['controller'] = "pagina";

        $result = $this->M_paginas->getpaginas_id($id);

        $data['id_pagina'] = $id;
        $data['nome_pagina'] = $result->row()->nome_pagina;
        $data['texto_pagina'] = $result->row()->texto_pagina;
        $data['bg_pagina'] = $result->row()->bg_pagina;
        $data['menu_top_pagina'] = $result->row()->menu_top_pagina;


        $this->load->view('admin/headers_sb/v_header', $data);
        $this->load->view('admin/headers_sb/v_menu', $data);   

        $this->load->view('admin/paginas/v_add_paginas', $data);
        $this->load->view('admin/headers_sb/v_footer');
    }


    public function store(){
        $id = $this->input->post('id_pagina');
        $nome = $this->input->post('nome_pagina');
        $url = $this->url_amiga->sanitize_title_with_dashes($this->input->post('nome_pagina'));
        $texto = $this->input->post('texto_pagina');



        $dados = array(
           'nome_pagina' => $nome,
           'texto_pagina' => $texto,
           'url_pagina' => $url,
           'bg_pagina' => $this->input->post('bg_pagina'),
           'menu_top_pagina' => $this->input->post('menu_top_pagina'),

        );

        if($this->M_paginas->store($dados, $id)){
         echo '<script>alert("Salvo com sucesso!"), history.go(-2);</script>'  ;
        }
        else{
            echo '<script>alert("Erro ao salvar"), history.go(-1);</script>'  ;
        }

    }


     public function ajax_delete($id)
    {

       if($this->M_slides->delete_by_id($id) == "Success"){
        echo json_encode(array("status" => TRUE));
       }else{
        echo json_encode(array("status" => FALSE));
       }

    }


}
