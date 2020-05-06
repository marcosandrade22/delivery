<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        
        $this->load->helper('text');
        $this->load->helper('cookie');
        $this->load->model('M_select');
    }
    
    
    public function index(){
        
        $data['title'] = "Contato - Blog curso";
         
        $this->load->view('site/headers/v_header.php', $data);
        $this->load->view('site/headers/v_menu.php', $data);
       
        $this->load->view('site/contato/v_contato.php', $data);
       
        $this->load->view('site/headers/v_footer.php');
    }
    
    
}