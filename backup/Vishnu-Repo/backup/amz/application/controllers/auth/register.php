<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 /*Required Files*/
 require APPPATH.'Managers/BaseManager.php';
 require APPPATH.'Managers/AccountManager.php';

 class Register extends MY_Controller {

   var $layout_path='layouts/layout_nonuser';  


 public function Index() {   //register Page Controller //

      $this->page='main/register';

     $this->data['pagetitle']="Register Page";  

     $this->data['script']='<script src="'.base_url('assets/amz_components/js/pages/sign-up.js').'"></script>';
         
    $this->layout($this->layout_path);

}   
      
 public function Availability(){//UserName Exists 

  $name = $_POST['name'];

  $acc_man=new AccountManager();

  $val=$acc_man->Available_Users($name);
  
  return $val;

 }


public function RegisterForm(){  //Register User//

    if(!empty($this->input->post('c_name')) && !empty($this->input->post('user_name')) && !empty($this->input->post('password')) && !empty($this->input->post('email'))){

   $acc_man=new AccountManager();

   $acc_man->Create_Account($this->input->post('c_name'), $this->input->post('user_name'), md5($this->input->post('password')) ,$this->input->post('email'));

  redirect('auth/Login'); 

 }
 else{
         redirect('auth/Register'); 
    }

}
  



   } 
?>