<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
         parent::__construct();
       $this->load->model('M_login');
        $this->load->model('M_seo');
    }

    public function index(){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Login - ".$data['nome_site'];
        $this->load->view('site/headers/v_header.php', $data);
        $this->load->view('v_login');

    }

    public function logar(){
        $usuario = $this->input->post('email');
        $senha = sha1($this->input->post('senha'));

        $retorno = $this->M_login->verifica_login($usuario, $senha);
        if($retorno->num_rows() == 1){
            $this->session->set_userdata("logado", 1);

            $usuario_nome = $retorno->row()->nome;
            $usuario_id = $retorno->row()->id;
            $this->session->set_userdata("Usuario",$usuario_nome);
            $this->session->set_userdata("ID",$usuario_id);
            redirect(base_url('dashboard'));



        }else{
           redirect(base_url('login'));
        }

    }

        public function logout(){
		$this->session->unset_userdata("logado");
		redirect(base_url('login'));
                unset($_SESSION['filemanager']);

	}

}
