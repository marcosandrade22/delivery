<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_produtos extends MY_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('M_produto');
      $this->load->model('M_select');
      $this->load->library('url_amiga');
      $this->load->model('M_seo');
    }

    public function index(){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Produtos - ".$data['nome_site'];
        $data['pagina'] = "Produtos";

        //$data['artigos'] = $this->M_artigos->getartigos()->result();
        //['artigos'] = $this->M_artigos->getartigos()->num_rows();

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/produtos/v_produtos', $data);
        $this->load->view('admin/headers/v_footer');


    }

    public function ajax_list()
        {
        $list = $this->M_produto->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rows) {
            $no++;
            $row = array();
            $row[] = $rows->id_produto;
            $row[] = '<img src="'.base_url().$rows->imagem_produto.'" class="thumb-list" />'.$rows->titulo_produto;
            $row[] = $rows->nome_categoria;
            $row[] = $rows->preco_produto;
            
            if($rows->destaque_produto == '1'){$destaque = "<b>Sim<b>";}elseif($rows->destaque_produto == '0'){$destaque = "Não";};
            $row[] = $destaque;
            
            if($rows->promocao_produto == '1'){$promocao = "<b>Sim</b>";}elseif($rows->promocao_produto == '0'){$promocao = "Não";};
            $row[] = $promocao;
            
            if($rows->status_produto == '1'){$status = 'Ativo';}elseif($rows->status_produto == '0'){$status = '<span class="red">Inativo</span>';};
            $row[] = $status;
            
            $row[] = '<a class="btn btn-success" href="'.base_url().'adm_produtos/edit/'.$rows->id_produto.'"> Editar</a>';
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_produto->count_all(),
                        "recordsFiltered" => $this->M_produto->count_filtered(),
                        "data" => $data,
                );
       echo json_encode($output);
    }


    public function novo_produto(){
      $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
      $data['title'] = "produtos - ".$data['nome_site'];
        $data['pagina'] = "Novo Produto";

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);
        $this->load->view('admin/produtos/v_add_produtos', $data);

        $this->load->view('admin/headers/v_footer');
    }

    public function edit($id){
      $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
      $data['title'] = "produtos - ".$data['nome_site'];
        $data['pagina'] = "Edição de produto";

        $result = $this->M_produto->get_produtos_id($id);

        $data['id_produto'] = $id;
        $data['titulo_produto'] = $result->row()->titulo_produto;
        $data['preco_produto'] = $result->row()->preco_produto;
        $data['texto_produto'] = $result->row()->texto_produto;
        $data['imagem_produto'] = $result->row()->imagem_produto;
        $data['status_produto'] = $result->row()->status_produto;
        $data['destaque_produto'] = $result->row()->destaque_produto;
        $data['promocao_produto'] = $result->row()->promocao_produto;
        $data['categoria'] = $result->row()->categoria_produto;

        $data['categorias'] = $this->M_produto->getcategorias()->result();

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/produtos/v_add_produtos', $data);
        $this->load->view('admin/headers/v_footer');
    }

    public function store(){
        $id = $this->input->post('id_produto');
        $titulo = $this->input->post('titulo_produto');
        $texto = $this->input->post('texto_produto');
        $imagem = $this->input->post('imagem_produto');
        $categoria = $this->input->post('categoria_produto');
        $status = $this->input->post('status_produto');
        $destaque = $this->input->post('destaque_produto');
        $promocao = $this->input->post('promocao_produto');
        $preco = $this->input->post('preco_produto');
        $url_amiga = $this->url_amiga->sanitize_title_with_dashes($this->input->post('titulo_produto'));
        
        
        
        if(empty($id)){
        $dados = array(
           
           'titulo_produto' => $titulo,
           'texto_produto' => $texto,
           'imagem_produto' =>$imagem,
           'status_produto' => $status,
           'destaque_produto' => $destaque,
           'categoria_produto' => $categoria,
           'url_amiga' => $url_amiga,
           'data_criacao' => date('Y-m-d'),
           'preco_produto' => $preco,
           'promocao_produto' => $promocao,
           'usuario_produto' => $this->session->userdata('ID'),
        );
        }
        else{
            $dados = array(
           
           'titulo_produto' => $titulo,
           'texto_produto' => $texto,
           'imagem_produto' =>$imagem,
           'status_produto' => $status,
            'destaque_produto' => $destaque,
            'categoria_produto' => $categoria,
            'url_amiga' => $url_amiga,
            'preco_produto' => $preco,
            'promocao_produto' => $promocao
            );
        }

        if($this->M_produto->store($dados, $id)){
            $a = explode("-",$url_amiga);
            $b = $a[0];
            if(empty($id)){
                 $cod=$b.$this->db->insert_id();
                $dados = array(
                'codigo_produto' => $cod, 
                );
               $this->M_produto->store($dados, $this->db->insert_id()) ;
            }
            
         echo '<script>alert("Salvo com sucesso!"), history.go(-2);</script>'  ;
        }
        else{
            echo '<script>alert("Erro ao salvar"), history.go(-1);</script>'  ;
        }

    }



}
