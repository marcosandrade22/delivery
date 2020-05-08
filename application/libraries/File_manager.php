<?php
class File_manager extends CI_Model{
    
    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                
        }
     function file(){
         //require 'kcfinder/index.php';
         //require_once "kcfinder/browse.php";
         //require "browse.php";
         require_once "file/filemanager/dialog.php";
     }   
        
}