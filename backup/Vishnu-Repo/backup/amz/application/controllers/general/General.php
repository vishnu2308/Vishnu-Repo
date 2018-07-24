<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class General extends MY_Controller {

    var $layout_path='layouts/layout_settings';

      public function Index() { 
      $this->page='general/index';
      $this->data['pagetitle']="General";  
      $this->data['script']='<script src="'.base_url('assets/amz_components/js/pages/general.js').'"></script>';
      $this->layout_settings($this->layout_path);

      }  
 
}
?>


