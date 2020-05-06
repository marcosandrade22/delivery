<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artigos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_artigos');
        $this->load->helper('text');
        $this->load->helper('cookie');
        $this->load->model('M_select');
        $this->load->model('M_seo');
    }

    public function registra_visita($id){
            $check_visitor = $this->input->cookie(urldecode($id), FALSE);
           $ip = $this->input->ip_address();

           if ($check_visitor == false) {
                $cookie = array(
                "name" => urldecode($id),
                "value" => "$ip",
                "expire" => time() + 7200,
                "secure" => false );
               $this->input->set_cookie($cookie);
               $this->M_artigos->update_counter($id);
             }
    }

    public function categoria($id){
         $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Categoria - Blog curso";
        $data['categoria'] = $this->M_artigos->get_artigo_categoria($id)->row()->nome_categoria;
        $data['artigos'] = $this->M_artigos->get_artigo_categoria($id);
        $data['relacionados'] = $this->M_artigos->get_artigo_categoria_rel($id, 4);

        $this->load->view('site/headers/v_header.php', $data);
        $this->load->view('site/headers/v_menu.php', $data);

        $this->load->view('site/artigo/v_categoria.php', $data);

        $this->load->view('site/headers/v_footer.php');

    }

    public function detalhe($id) {



        $this->registra_visita($id);


        $data['artigo'] = $this->M_artigos->get_artigo_id($id);
        $categoria = $this->M_artigos->get_artigo_id($id)->row()->categoria_artigo;

        $data['alt'] = $this->M_seo->seo('artigos')->row()->seo_alt;

        $data['controller'] = base_url().'artigos/detalhe/'.$this->M_artigos->get_artigo_id($id)->row()->url_amiga;
        $data['title'] = $this->M_artigos->get_artigo_id($id)->row()->titulo_artigo.' - Blog Curso';
        $data['imagem'] = $this->M_artigos->get_artigo_id($id)->row()->imagem_artigo;
        $data['descricao'] = strip_tags(word_limiter($this->M_artigos->get_artigo_id($id)->row()->texto_artigo,10));

        $data['relacionados'] = $this->M_artigos->get_artigo_relacionados($id, $categoria);
        $data['gostar'] = $this->M_artigos->get_artigo_gostar($id, $categoria);

        $this->load->view('site/headers/v_header.php', $data);
        $this->load->view('site/headers/v_menu.php', $data);

        $this->load->view('site/artigo/v_artigo.php', $data);

        $this->load->view('site/headers/v_footer.php');

    }

}
