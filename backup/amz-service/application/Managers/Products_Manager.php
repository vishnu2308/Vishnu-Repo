<?php
//Required Files//
require APPPATH.'DataModels/CredentialsInfo.php';
require_once APPPATH.'Managers/MWS_Manager.php';

class Products_Manager{

public function UpdateProducts(){//Credentials Info//

$credential_details=new Credentials_Info();//Create Object//

/*$credential_details->AccountId =$this->GetGUID();//GUID Creation
$credential_details->SellerID=$this->SellerID;//SellerID
$credential_details->MarketPlaceID=$this->MarketPlaceID;//Market Place ID
$credential_details->MWS_AccessKey=$this->MWS_AccessKey;//Access Key
$credential_details->MWS_SecretKey=$this->MWS_SecretKey;//Secret Key
$credential_details->Insert();//Call Insert Function Using object//*/

$val=$credential_details->GetallCredentials();//Call get all Credentials Using Object//

 foreach ($val as $value) {

  $acc_ID=$value->AccountId;

  $pro_Details=new Product_Info();//Create Object for Product Info//

  $pro_Details->GetASINDetails($acc_ID);

  $pro_Details->UpdateProductInfo();

  $product_details=new MWS_Manager();//Create Object for MWS_manager//

  $product_details->UpdateProductDetails($pro_Details->GetASINDetails($acc_ID),$value);
  
}

}

}
?>