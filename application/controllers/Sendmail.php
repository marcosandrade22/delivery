<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {
  
    public function __construct() {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('M_select');
      
    }
    
    
    public function index()
	{
            
            //if(empty($this->input->post('nome')) AND empty($this->input->post('email')) )
             if('1' == '0')
            {
                 echo '<script>alert("Alguns dados não foram preenchidos."), history.go(-1);</script>';
            }
            else{
                
            $data['title'] = "Contato - Blog curso";
            $quebralinha = "\n";
            $mailfrom = 'contato@blogcurso.tk'; // preencha o endereço do remetente
            $mailto = $mailfrom;
            
            $remetente = $this->input->post('email');
            $nome = $this->input->post('nome');
            $receb = $this->input->post('mensagem');

           
            $assunto = 'Contato Pelo Site';
            $mensagem = "<b><hr>De:</b>";
            $mensagem .= $nome ;
            $mensagem .=" <b><br>email:</b>";
            $mensagem .= $remetente;

            $mensagem .="<h1><hr><br>Mensagem</h1>";
            $mensagem .="<p>";
            $mensagem .= $receb;
            $mensagem .="</p>"; 
            
            $this->load->view('site/headers/v_header.php', $data);
            $this->load->view('site/headers/v_menu.php', $data);
       
            $this->load->view('site/contato/v_obrigado');
       
            $this->load->view('site/headers/v_footer.php');

            
            $config['charset'] = 'utf-8';
            $config['mailtype'] = 'html';
            //$config['mailPath'] = 'env -i /usr/sbin/sendmail -t -i';
            
            //$config['SMTPHost'] = 'host';
            //$config['SMTPUser'] = 'usuario';
            //$config['SMTPPass'] = 'senha';
            //$config['SMTPPort'] = '465';
            
            $this->email->initialize($config);
            
            $this->email->from($mailfrom, $assunto);
            $this->email->to($mailto); 
            $this->email->subject($assunto);
            $this->email->message($mensagem);	
            $this->email->send();
            echo $this->email->print_debugger();
            }
                 
	}
    
    
}
