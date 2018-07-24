<?php

require_once 'system/core/Model.php';

//Model to hold Prododuct details
class Product_Info extends CI_Model
{
/*Data members*/
 public $AccountId = "";
 public $ASIN = "";
 public $SKU = "";
 public $Title  = "";
 public $Brand  = "";
 public $Price = "";
 public $Rank  = "";
 public $Categories  = "";
 public $ImageUrl  = "";
 public $LowestPrice  = "";
 public $RankDifference  = "";
 public $SellerCount = "";
 public $CrawlingId = "";
 public $CrawlingDate="";


public function UpdateProductInfo(){


  if (!empty($this->AccountId) && !empty($this->ASIN)) { //$a is empty because it has value 0


         $sql = "insert into temp_productinfo(AccountId, ASIN, SKU, Title, Brand, Price, Rank , Categories, ImageUrl, LowestPrice,RankDifference,SellerCount,CrawlingId,CrawlingDate) values ('".$this->AccountId."','".$this->ASIN."','".$this->SKU."','".$this->Title."','".$this->Brand."','".$this->Price."','".$this->Rank."','".$this->Categories."','".$this->ImageUrl."','".$this->LowestPrice."','".$this->RankDifference."','".$this->SellerCount."','".$this->CrawlingId."','".date('Y-m-d H:i:s')."')";
         
            $this->db->query($sql);

       }



}

public function GetASINDetails($account_id){//Get ASIN Details For Matching product

	$sql="select ASIN from productdata_information where AccountId='".$account_id."'";//Query For Getting ASIN values From DB

	$query=$this->db->query($sql);//retrive data from DB

	$asin_val=$query->result();//Query Result

	$asin_array=array();//Initialize ASIN array

	foreach ($asin_val as $asin_value) {

         $asin=$asin_value->ASIN;

         array_push($asin_array,$asin);//Push array value
	}

return $asin_array; //Return array Value//

}

}
?>