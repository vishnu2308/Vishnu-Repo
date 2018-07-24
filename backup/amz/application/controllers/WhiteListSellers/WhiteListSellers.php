<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class WhiteListSellers extends MY_Controller {
    var $layout_path='layouts/layout_settings';
      public function Index() { 
         $this->page='WhiteListSellers/index';
         $this->data['pagetitle']="WhiteListSellers";  
    //     $this->data['script']='<script src="'.base_url('assets/js/pages/log-in.js').'"></script>';
         $this->layout_settings($this->layout_path);

      }  
   } 
?>