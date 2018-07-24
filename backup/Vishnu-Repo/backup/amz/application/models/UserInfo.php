<?php
/*
* Author: Vishnu
* Class:UserInfo
* Copyright 2018 @ ValleyPoint
*/
require_once 'system/core/Model.php';
class User_Info extends CI_Model
{
/*Data members*/
 public $AccountId = "";
 public $UserId = "";
 public $Email = "";
 public $UserName = "";
 public $Password = "";
 public $Role = ""; 

public function Insert(){//Insert data in Database//

 $sql = "insert into userinfo(UserId,AccountId,UserName,Password,Role,Email) values ('$this->UserId','$this->AccountId','$this->UserName','$this->Password','$this->Role','$this->Email')";

 $this->db->query($sql);

}

public function Check_Availability_Users($username){//UserName Exists 

  $result = array("success"=>false,"rowCount"=>0,"errorInfo"=>'',"data"=>'');
  
   $sql="select * from userinfo where UserName='".$username."'";

   $users=$this->db->query($sql);

  if($users->num_rows() > 0){

    $result["rowCount"] =$users->num_rows();

    $result["data"] = "Already Exists.";
  }
  else{
    $result["data"]="Available"; 

  }
 $result["success"]=true; 

  echo json_encode($result);
//return json_encode($result);

}

public function Read($p_userName, $p_password){
 
  $result = array(false,"rowCount"=>0,"errorInfo"=>'',"data"=>'');

 $sql = "select * from userinfo where UserName ='".$p_userName."' or Email = '".$p_userName."' and Password = '".$p_password."'";

 $query = $this->db->query($sql);
 
if($query->num_rows() == 1)
{
 // If there is a user, then create session data
  return true;
}

else{

  return false;
}

}

}

//ENUM Data Type//
abstract class UserRole{
 const Admin =1;
 const Standard = 2;
}


?>