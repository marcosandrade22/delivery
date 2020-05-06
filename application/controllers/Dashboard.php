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

        $this->load->view('admin/headers/v_header', $data);

        $this->load->view('admin/dashboard/v_menu_dashboard', $data);
        $this->load->view('admin/dashboard/v_pagina_dash', $data);
        $this->load->view('admin/headers/v_footer');

    }

}
