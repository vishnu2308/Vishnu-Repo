<?php 
/*
* Author: Vishnu
* Class:Account Manager
* Copyright 2018 @ ValleyPoint
*/
	require APPPATH.'models/AccountInfo.php';
	require APPPATH.'models/UserInfo.php';

  class AccountManager extends BaseManager{	  //Manager to handle account related logics

       public function Create_Account($p_CompanyName, $p_UserName, $p_Password, $p_Email){
         $acc_info=new Account_Info();
         $acc_info->AccountId =  $this->GetGUID();//GUID Creation
         $acc_info->CompanyName = $p_CompanyName;
         $acc_info->Status = AccountStatus::Trail;//Enum Data Type Creation
         print_r($acc_info->Status);
         $acc_info->AccountType = AccountType::Starter;//Enum Data Type Creation
         $acc_info->ExpiryDate = date('Y-m-d', strtotime('+15 days'));
      	 $acc_info->CreatedDate = date('Y-m-d');
      	 $acc_info->Email = $p_Email;
         $acc_info->Insert();
      	 $usr_info = new User_Info();
         $usr_info->UserId = $this->GetGUID();
      	 $usr_info->AccountId ="$acc_info->AccountId";
         $usr_info->Email = $p_Email;
      	 $usr_info->UserName =$p_UserName;
      	 $usr_info->Password = $p_Password; 
      	 $usr_info->Role = UserRole::Admin;//Enum Data Type Creation
         $usr_info->Insert();
       }



       public function Available_Users($p_UserName){//Check username Avialiablity
         $acc_info=new User_Info();
         return $acc_info->Check_Availability_Users($p_UserName);           
       }

       

	}
?>