<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filemanager extends MY_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('M_paginas');
      $this->load->helper('filemanager');
      $this->load->model('M_seo');
    }

    public function index(){
       fileman();
    }
    
}