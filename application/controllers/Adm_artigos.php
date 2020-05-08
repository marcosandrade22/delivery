<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_artigos extends MY_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('M_artigos');
      $this->load->model('M_select');
      $this->load->library('url_amiga');
      $this->load->model('M_seo');
    }

    public function index(){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Artigos - ".$data['nome_site'];
        $data['pagina'] = "Artigos";
        $data['controller'] = "artigo";

        //$data['artigos'] = $this->M_artigos->getartigos()->result();
        //['artigos'] = $this->M_artigos->getartigos()->num_rows();

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/artigos/v_artigos', $data);
        $this->load->view('admin/headers/v_footer');


    }

    public function ajax_list()
        {
        $list = $this->M_artigos->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rows) {
            $no++;
            $row = array();
            $row[] = $rows->id_artigo;
            $row[] = $rows->titulo_artigo;
            $row[] = $rows->nome_categoria;
            if($rows->destaque_artigo == '1'){$destaque = "Sim";}elseif($rows->destaque_artigo == '0'){$destaque = "Não";};

            $row[] = $destaque;
            $row[] = '<a class="btn btn-success" href="'.base_url().'adm_artigos/edit/'.$rows->id_artigo.'"> Editar</a>';
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_artigos->count_all(),
                        "recordsFiltered" => $this->M_artigos->count_filtered(),
                        "data" => $data,
                );
       echo json_encode($output);
    }


    public function novo_artigo(){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Artigos - ".$data['nome_site'];
        $data['pagina'] = "Novo Artigo";
        $data['controller'] = "artigo";

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);
        
        $this->load->view('admin/artigos/v_add_artigos', $data);

        $this->load->view('admin/headers/v_footer');
    }

    public function edit($id){
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Artigos - ".$data['nome_site'];
        $data['pagina'] = "Edição de Artigos";
        $data['controller'] = "artigo";

        $result = $this->M_artigos->getuartigos_id($id);

        $data['id_artigo'] = $id;
        $data['titulo_artigo'] = $result->row()->titulo_artigo;
        $data['texto_artigo'] = $result->row()->texto_artigo;
        $data['imagem_artigo'] = $result->row()->imagem_artigo;
        $data['status_artigo'] = $result->row()->status_artigo;
        $data['destaque_artigo'] = $result->row()->destaque_artigo;
        $data['categoria'] = $result->row()->categoria_artigo;

        $data['categorias'] = $this->M_artigos->getcategorias()->result();

        $this->load->view('admin/headers/v_header', $data);
        $this->load->view('admin/dashboard/v_menu_dashboard', $data);

        $this->load->view('admin/artigos/v_add_artigos', $data);
        $this->load->view('admin/headers/v_footer');
    }

    public function store(){
        $id = $this->input->post('id_artigo');
        $titulo = $this->input->post('titulo_artigo');
        $texto = $this->input->post('texto_artigo');
        $imagem = $this->input->post('imagem_artigo');
        $categoria = $this->input->post('categoria_artigo');
        $status = $this->input->post('status_artigo');
        $destaque = $this->input->post('destaque_artigo');
        $url_amiga = $this->url_amiga->sanitize_title_with_dashes($this->input->post('titulo_artigo'));


        if(empty($id)){
        $dados = array(
           'titulo_artigo' => $titulo,
           'texto_artigo' => $texto,
           'imagem_artigo' =>$imagem,
           'status_artigo' => $status,
           'destaque_artigo' => $destaque,
           'categoria_artigo' => $categoria,
           'url_amiga' => $url_amiga,
           'data_criacao' => date('Y-m-d'),
           'usuario_artigo' => $this->session->userdata('ID'),
        );
        }
        else{
            $dados = array(
           'titulo_artigo' => $titulo,
           'texto_artigo' => $texto,
           'imagem_artigo' =>$imagem,
           'status_artigo' => $status,
            'destaque_artigo' => $destaque,
            'categoria_artigo' => $categoria,
            'url_amiga' => $url_amiga,
            );
        }

        if($this->M_artigos->store($dados, $id)){
         echo '<script>alert("Salvo com sucesso!"), history.go(-2);</script>'  ;
        }
        else{
            echo '<script>alert("Erro ao salvar"), history.go(-1);</script>'  ;
        }

    }



}
