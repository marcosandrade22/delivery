<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct(){
         parent::__construct();
         $this->load->model('M_seo');

    }
    public function index() {
        $data['nome_site'] = $this->M_seo->config()->row()->nome_site;
        $data['title'] = "Dashboard - ".$data['nome_site'];
        $data['pagina'] = "Dashboard";
        $data['controller'] = "dashboard";

        $this->load->view('admin/headers_sb/v_header', $data);
        $this->load->view('admin/headers_sb/v_menu', $data);

        $this->load->view('admin/dashboard/v_dashboard', $data);
       
        $this->load->view('admin/headers_sb/v_footer');

    }

}
