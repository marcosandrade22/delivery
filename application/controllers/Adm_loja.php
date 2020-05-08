<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_loja extends MY_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('M_config');
      $this->load->model('M_select');
      $this->load->library('url_amiga');
      $this->load->model('M_seo');
    }

    public function index() {
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Configurações - ".$data['nome_site'];
        $data['pagina'] = "Configurações";
        $data['controller'] = "configuracao";
        
        $data['config'] = $this->M_config->getconfig();
       
        $this->load->view('admin/headers_sb/v_header', $data);
        $this->load->view('admin/headers_sb/v_menu', $data);

        $this->load->view('admin/config/v_config', $data);
       
        $this->load->view('admin/headers_sb/v_footer');
        
    }
    
    public function edit(){
         $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Configurações - ".$data['nome_site'];
        $data['pagina'] = "Edição de Configurações";
        $data['controller'] = "configuracao";

        $result = $this->M_config->getconfig();

        $data['nome'] = $result->row()->nome_site;
        $data['email'] = $result->row()->email_site;
        $data['telefone'] = $result->row()->telefone_site;
        $data['info'] = $result->row()->info_site;
        $data['frete'] = $result->row()->frete_site;
        $data['endereco'] = $result->row()->endereco_site;
        $data['logo'] = $result->row()->logo_site;
        $data['facebook'] = $result->row()->facebook_site;
        $data['instagram'] = $result->row()->instagram_site;

        $this->load->view('admin/headers_sb/v_header', $data);
        $this->load->view('admin/headers_sb/v_menu', $data);   

        $this->load->view('admin/config/v_add_config', $data);
        
        $this->load->view('admin/headers_sb/v_footer');
    }
    
    
     public function store(){
        $dados = array(
           'nome_site' => $this->input->post('nome_site'),
           'email_site' => $this->input->post('email_site'),
           'telefone_site' => $this->input->post('telefone_site'),
           'info_site' => $this->input->post('info_site'),
           'frete_site' => $this->input->post('frete_site'),
            'endereco_site' => $this->input->post('endereco_site'),
           'logo_site' => $this->input->post('logo_site'), 
            'facebook_site' => $this->input->post('facebook_site'),
            'instagram_site' => $this->input->post('instagram_site'),
        );

        if($this->M_config->store($dados)){
         echo '<script>alert("Salvo com sucesso!"), history.go(-2);</script>'  ;
        }
        else{
            echo '<script>alert("Erro ao salvar"), history.go(-1);</script>'  ;
        }

    }

}