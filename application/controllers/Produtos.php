<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_produto');
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
               $this->M_produto->update_counter($id);
             }
    }

    public function categoria($id){
        
        
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['email_site'] = $this->M_seo->config()->row()->email_site;
        $data['telefone_site'] = $this->M_seo->config()->row()->telefone_site;
        $data['title'] = "Categoria - ".$data['nome_site'];
        $data['categoria'] = $this->M_produto->get_categoria($id);
        $data['info'] = $this->M_seo->config();
        
        $data['produtos'] = $this->M_produto->get_produto_categoria($id);
        $data['produtos_num'] = $this->M_produto->get_produto_categoria($id)->num_rows();
        $data['promocao'] = $this->M_produto->get_produto_categoria_prom($id);
        $data['last'] = $this->M_produto->get_produto_last($id);
        $data['relacionados'] = $this->M_produto->get_produto_categoria_rel($id, 4);

        $this->load->view('site/headers/v_header.php', $data);
        $this->load->view('site/headers/v_menu.php', $data);
        $this->load->view('site/headers/v_top.php', $data);
        $this->load->view('site/headers/v_breadcumb.php', $data);
        $this->load->view('site/produto/v_categoria.php', $data);

        $this->load->view('site/headers/v_footer.php');

    }

    public function detalhe($id) {
        $this->registra_visita($id);

        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['email_site'] = $this->M_seo->config()->row()->email_site;
        $data['telefone_site'] = $this->M_seo->config()->row()->telefone_site;
        $data['produto'] = $this->M_produto->get_produto_id($id)->result();
        $data['info'] = $this->M_seo->config();
        
        $categoria = $this->M_produto->get_produto_id($id)->row()->categoria_produto;
        

        $data['alt'] = $this->M_seo->seo('artigos')->row()->seo_alt;

        $data['controller'] = base_url().'artigos/detalhe/'.$this->M_produto->get_produto_id($id)->row()->url_amiga;
        $data['title'] = $this->M_produto->get_produto_id($id)->row()->titulo_produto.' - Blog Curso';
        $data['imagem'] = $this->M_produto->get_produto_id($id)->row()->imagem_produto;
        $data['descricao'] = strip_tags(word_limiter($this->M_produto->get_produto_id($id)->row()->texto_produto,10));

        $data['relacionados'] = $this->M_produto->get_produto_relacionados($id, $categoria);
        $data['gostar'] = $this->M_produto->get_produto_gostar($id, $categoria);

        $this->load->view('site/headers/v_header.php', $data);
        $this->load->view('site/headers/v_menu.php', $data);
        $this->load->view('site/headers/v_top.php', $data);
        $this->load->view('site/headers/v_breadcumb_produto.php', $data);
        
        $this->load->view('site/produto/v_produto.php', $data);

        $this->load->view('site/headers/v_footer.php');

    }
    
    public function ajax_action(){
        if(!empty($this->input->post('action'))) {
        switch($this->input->post('action')) {
	case "add":
		if(!empty($this->input->post('quantidade'))) {
                    //$this->session->unset_userdata('cart_item');
                   $CodigoProduto = $this->M_produto->get_produto_ajax($this->input->post('id_produto'))->result_array();
                        
                    $nome = $CodigoProduto[0]["id_produto"];
                            $produtoArray = 
                                array(
                                   $CodigoProduto[0]["codigo_produto"] =>
                                    array(
                                        'nome'=>$CodigoProduto[0]['titulo_produto'],
                                        'id_produto'=>$CodigoProduto[0]['id_produto'],
                                        'codigo_produto'=>$CodigoProduto[0]['codigo_produto'],
                                        'quantidade'=>$this->input->post('quantidade'),
                                        'preco' =>$CodigoProduto[0]['preco_produto'],
                                   )
                                );
                        
                        if(!empty($this->session->cart_item)) {
                                if(in_array($CodigoProduto[0]["codigo_produto"],$this->session->cart_item)) {
                                   echo 'in';
					foreach($this->session->cart_item   as $k => $v) {
                                            if($CodigoProduto[0]["codigo_produto"] == $k)
                                                
                                                $this->session->set_userdata(cart_item[$k]["quantidade"],
                                                $this->input->post('quantidade'));
                                        }
				} else {
                                   
                                  $this->session->set_userdata('cart_item', array_merge($this->session->cart_item,$produtoArray));
				}
			} else {
                            echo 'nao vazio';
				$this->session->set_userdata(cart_item,  $produtoArray);
			}
                       // print_r($this->session->cart_item);
		}
              
	break;
	case "remove":
		if(!empty($this->session->cart_item)) {
			foreach($this->session->cart_item as $k => $v) {
					if($this->input->post('code_produto') == $k)
                                           // $this->session->remove("cart_item");
                                       unset($_SESSION["cart_item"][$k]);
					if(empty($this->session->cart_item))
					unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;		
}
}
    }
    
    public function ajax_dot(){
        echo count($this->session->cart_item);
    }
    public function ajax_action2(){
        if (!isset($this->session->carrinho)) {
	       $this->session->carrinho = array();
        }

    // adicionar produtos
    if(!empty($this->input->post('action'))) {
	// adicionar carrinho
	if ($this->input->post('action') == 'add') {
        
		$id = intval($this->input->post('code'));
		if (!isset($this->session->carrinho[$id])) {
			$this->session->carrinho[$id] = 1;
		} else {
			$this->session->carrinho[$id] += 1;
		}
	}
	
	// remover produtos
	if ($_GET['acao'] == 'del') {
		$id = intval($_GET['id']);
		if (isset($_SESSION['carrinho'][$id])) {
			unset($_SESSION['carrinho'][$id]);
		}
	}
	
	// alterar quantidade
	if ($_GET['acao'] == 'up') {
		if (is_array($_POST['prod'])) {
			foreach($_POST['prod'] as $id => $qtd) {
				$id  = intval($id);
				$qtd = intval($qtd);
				if (!empty($qtd) || $qtd <> 0) {
					$_SESSION['carrinho'][$id] = $qtd;
				} else {
					unset($_SESSION['carrinho'][$id]);
				}
			}
			
		}
	}
}
    }

}
