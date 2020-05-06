<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_home');
        $this->load->model('M_slides');
        $this->load->model('M_select');
        $this->load->helper('text');
        $this->load->model('M_seo');
       

    }

    public function index() {
        // FOR SI AND CKFINDER
        if (defined('REQUEST') && REQUEST === 'external') {
            return;
        }
        //limpar carrinho - usar em desenvolvimento
       //$this->session->unset_userdata("cart_item");
        //exibir array carrinho - usar em desenvolvimento
        //print_r($this->session->cart_item);
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['email_site'] = $this->M_seo->config()->row()->email_site;
        $data['telefone_site'] = $this->M_seo->config()->row()->telefone_site;
        $data['title'] = "Home - ".$data['nome_site'];

        $data['noticias'] = $this->M_home->get_last_articles(3, 1);
        $data['produtos'] = $this->M_home->get_produtos(8)->result();
        
        $data['categorias'] = $this->M_home->get_categorias()->result();

        $data['slides'] = $this->M_slides->getslides()->result();
        $data['slides_id'] = $this->M_slides->getslides()->result();

        $this->load->view('site/headers/v_header.php', $data);
        $this->load->view('site/headers/v_menu.php', $data);
        $this->load->view('site/headers/v_top.php', $data);
        $this->load->view('site/headers/v_home.php', $data);

        $this->load->view('site/headers/v_footer.php');
        //$this->load->view('site/v_home.php');
    }

    public function blog(){
        $data['title'] = "Blog - Blog curso";
        $this->load->view('site/headers/v_header.php',$data);
        echo 'Blog ';
        $this->load->view('site/headers/v_footer.php');
    }



}
