<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class SellerView extends MY_Controller {
    var $layout_path='layouts/layout_frontend';
      public function index() { 
         $this->page='seller/index';
         $this->data['pagetitle']="Seller View";  
         $this->data['script']='<script src="'.base_url('assets/amz_components/js/pages/seller-view.js').'"></script>';
         $this->layout($this->layout_path);
      }  
   } 
?>