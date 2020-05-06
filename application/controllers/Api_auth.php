<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_auth extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_login'); 
        
    }
    
    public function index(){
        $retorno = $this->M_login->return_user($this->session->userdata('ID'));
        
    }
    
    
}