<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_slides extends MY_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('M_slides');
        $this->load->model('M_seo');

    }

    public function index(){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Slides - ".$data['nome_site'];
        $data['pagina'] = "Slides";
        $data['controller'] = "slide";

        $data['slides'] = $this->M_slides->getslides()->result();


        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/slides/v_slides', $data);
        $this->load->view('admin/headers/v_footer');


    }

    public function novo_slide(){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Slides - ".$data['nome_site'];
        $data['pagina'] = "Novo Slide";
        $data['controller'] = "slide";

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/slides/v_add_slides', $data);
        $this->load->view('admin/headers/v_footer');
    }

    public function edit($id){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Slides - ".$data['nome_site'];
        $data['pagina'] = "Edição de Slide";
        $data['controller'] = "slide";

        $result = $this->M_slides->getslides_id($id);

        $data['id_slide'] = $id;
        $data['nome_slide'] = $result->row()->nome_slide;
        $data['texto_1'] = $result->row()->texto_1;
        $data['texto_2'] = $result->row()->texto_2;
        $data['imagem_slide'] = $result->row()->imagem_slide;
        $data['link_slide'] = $result->row()->link_slide;
        $data['ordem_slide'] = $result->row()->ordem_slide;


        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/slides/v_add_slides', $data);
        $this->load->view('admin/headers/v_footer');
    }


    public function store(){
        $id = $this->input->post('id_slide');
        $nome = $this->input->post('nome_slide');
        $texto1 = $this->input->post('texto_1');
        $texto2 = $this->input->post('texto_2');
        $imagem = $this->input->post('imagem_slide');
        $link = $this->input->post('link_slide');
        $ordem = $this->input->post('ordem_slide');


        $dados = array(
           'nome_slide' => $nome,
           'texto_1' => $texto1,
           'texto_2' => $texto2,
           'imagem_slide' => $imagem,
           'link_slide' => $link,
           'ordem_slide' => $ordem,
        );

        if($this->M_slides->store($dados, $id)){
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
