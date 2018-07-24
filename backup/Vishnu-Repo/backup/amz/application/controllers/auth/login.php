<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'Managers/BaseManager.php';
require APPPATH.'Managers/LoginManager.php';
 class Login extends MY_Controller {
    var $layout_path='layouts/layout_nonuser';
   public function Index() { 
       $this->page='main/login';
         $this->data['pagetitle']="Login Page";  
         $this->data['script']='<script src="'.base_url('assets/amz_components/js/pages/log-in.js').'"></script>';
         $this->layout($this->layout_path);

      }  
      public function Authenticate(){

      	$login_man=new LoginManager();

        $user =$this->input->post('user_name');

        $pass =md5($this->input->post('password'));

        $val=$login_man->Authenticate_User($user,$pass);  

        if($val==true)

        redirect('ProductView');

       else{
       
        redirect('auth/Login'); 

       }
     


      }

   } 
?>