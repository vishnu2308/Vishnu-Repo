<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class ProductView extends MY_Controller {
    var $layout_path='layouts/layout_frontend';
      public function index() { 
         $this->page='product/index';
         $this->data['pagetitle']="Product View";  
         $this->data['script']='<script src="'.base_url('assets/amz_components/js/pages/product-view.js').'"></script>';
         $this->layout($this->layout_path);
      }  
   } 
?>