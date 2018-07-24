<?php
/*
* Author: Vishnu
* Class:AccountInfo
* Copyright 2018 @ ValleyPoint
*/
require_once 'system/core/Model.php';
class Account_Info extends CI_Model//Model to hold Account details
{
	
/*Data members*/
 public $AccountId = "";
 public $CompanyName = "";
 public $Email = "";
 public $Status = "";
 public $AccountType = "";
 public $CrawlingId = "";
 public $ExpiryDate = "";
 public $TimeZone = "";
 public $Logo = "";        
 public $CreatedDate = "";


//Insert function for user//
public function Insert(){

 $sql = "insert into accountinfo(AccountId, CompanyName, Email, Status, AccountType, CrawlingId, ExpiryDate, TimeZone, Logo, CreatedDate) values ('".$this->AccountId."','".$this->CompanyName."','".$this->Email."','".$this->Status."','".$this->AccountType."','".$this->CrawlingId."','".$this->ExpiryDate."','".$this->TimeZone."','".$this->Logo."','".$this->CreatedDate."')";

 $this->db->query($sql);

}


}


//ENUM Data Type//
abstract class AccountStatus
{
    const Trail = 1;
    const Waiting = 2;
    const Unsubscribe = 3;
    const Completed = 4;
}

//ENUM Data Type//
abstract class AccountType
{
    const Premium = 1;
    const Ultimate = 2;
    const Starter = 3;
}


?>