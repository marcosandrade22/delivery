<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_paginas');
        $this->load->helper('text');
        $this->load->helper('cookie');
        $this->load->model('M_select');
        $this->load->model('M_seo');
    }


    public function detalhe($id){
        
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['email_site'] = $this->M_seo->config()->row()->email_site;
        $data['telefone_site'] = $this->M_seo->config()->row()->telefone_site;
        $data['title'] = "Home - ".$data['nome_site'];
        $data['info'] = $this->M_seo->config();

        $data['pagina'] = $this->M_paginas->getpaginas_url($id);
        
        $this->load->view('site/headers/v_header.php', $data);
        $this->load->view('site/headers/v_menu.php', $data);
        $this->load->view('site/headers/v_top.php', $data);
         $this->load->view('site/pagina/v_breadcumb.php', $data);

        $this->load->view('site/pagina/v_pagina.php', $data);

       $this->load->view('site/headers/v_footer.php');
    }




}
