<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class AmazonMWSSetup extends MY_Controller {
    var $layout_path='layouts/layout_settings';
      public function Index() { 
         $this->page='AmazonMWSSetup/index';
         $this->data['pagetitle']="AmazonMWS Setup";  
    //     $this->data['script']='<script src="'.base_url('assets/js/pages/log-in.js').'"></script>';
         $this->layout_settings($this->layout_path);

      }  
   } 
?>