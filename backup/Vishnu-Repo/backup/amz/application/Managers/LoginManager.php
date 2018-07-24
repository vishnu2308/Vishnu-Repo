<?php 
/*
* Author: Vishnu
* Class:LoginManager
* Copyright 2018 @ ValleyPoint
*/
  require APPPATH.'models/AccountInfo.php';
  require APPPATH.'models/UserInfo.php';
  
  class LoginManager{	 	//Manager to handle account related logics	
  public function  Authenticate_User($p_UserName, $p_Password){
     $usr_info=new User_Info();  
     return  $usr_info->Read($p_UserName, $p_Password);
   }

}
?>