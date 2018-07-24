<?php

require_once 'system/core/Model.php';

class Credentials_Info extends CI_Model//Model to hold Credentials details//
{

/*Data members*/
 public $AccountId = "";
 public $SellerID = "";
 public $MarketPlaceID = "";
 public $MWS_AccessKey  = "";
 public $MWS_SecretKey = "";
 
 
public function Insert(){//Insert function for Credentials Information//

  $sql = "insert into mws_credentials(AccountId, SellerID, MarketPlaceID, MWS_AccessKey, MWS_SecretKey) values ('".$this->AccountId."','".$this->SellerID."','".$this->MarketPlaceID."','".$this->MWS_AccessKey."','".$this->MWS_SecretKey."')";

  $this->db->query($sql); //Insert MWS Credentials in to Database//

}




public function GetCredential(){//Get All Credentials

	$sql="select * from productdata_information";

	$this->db->query($sql);

}



public  function GetallCredentials(){//Get Credentials For Single User//

 $sql="select * from mws_credentials";//query for Get accoount Id//

 $query = $this->db->query($sql);

 $stack=array();//initialize Array value
 
   foreach ($query->result() as $row) //Create an array for Credentials//
    {   
    	$credential_obj=new Credentials_Info();//Create object for credential_Info inside class//

    	$credential_obj->AccountId=$row->AccountId;

    	$credential_obj->SellerID=$row->SellerID;

    	$credential_obj->MarketPlaceID=$row->MarketPlaceID;

    	$credential_obj->MWS_SecretKey=$row->MWS_SecretKey;

    	$credential_obj->MWS_AccessKey=$row->MWS_AccessKey;

      array_push($stack,$credential_obj);//Push credentials information //
    }

   return $stack;//Return credential Value//
}


}
?>