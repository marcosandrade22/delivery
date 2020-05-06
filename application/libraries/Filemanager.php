<?php
class Filemanager extends CI_Model{
    
    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                require_once "browse.php";
        }
     function file(){
         //require 'kcfinder/index.php';
         //require_once "kcfinder/browse.php";
         //require "browse.php";
     }   
        
}