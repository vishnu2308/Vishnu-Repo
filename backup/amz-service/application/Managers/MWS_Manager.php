<?php
/**
*  Create MWS manger Class
*  Get Product Details From MWS Library
*  Save Data From DataBase  
*  Give the Data To Product Info 
*/
//Required Files//
require APPPATH.'Managers/Files.php';
require APPPATH.'Managers/Products_Manager.php';

class MWS_Manager{//Create Class//
 //Variable Declaration//
 public $serviceUrl="https://mws.amazonservices.com/Products/2011-10-01",
 $MWS_AccessKey,
 $MWS_SecretKey,
 $SellerID,
 $MarketplaceID,
 $ApplicationName="Amazon",
 $ApplicationVersion="1.0",
 $config,
 $service = null,
 $request = null,//Get Product Details
 $brand=array(),//Get Brand name
 $title=array(),//Get Brand Title
 $URL=array(),//Get URL
 $product_category=array(),//Get productCategory
 $price=array(), //Get Price//w
 $rank=array(),//Get Rank
 $sellerSKU=array(),
 $asin_array=array(),
 $CompetitiveASIN=array(),
 $MyPriceASIN=array(),
 $ProductCategoriesForASIN=array(),
 $temp_brand,
 $temp_title,
 $temp_URL,
 $temp_rank,
 $temp_category,
 $temp_sku,
 $temp_price;//Get Seller SKU


 public function UpdateProductDetails($asin,$account_details){ //Update Product Details//

 $this->Initialize($account_details);

   $i = 0;

  $temp_arr=array();//initialize an new Array

 foreach ($asin as $key) {

  if($i==2){

   array_push($temp_arr, $key);//Push array value
   
   $this->GetInfo($temp_arr);

   $this->GetCompetitiveASIN($temp_arr);

   $this->GetMyPriceASIN($temp_arr);
   
   foreach ($temp_arr as $value) {

     $this->GetProductASIN($value);

     $this->InsertProduct($account_details,$value);//Insert Data into database

   }
   
   $i=0;//Reset Value

  $temp_arr=array();//re-initialize Array

  }

  else{

    $i++;

    array_push($temp_arr, $key); // ush array value

  }

 }

 if($i>0){

   $this->GetInfo($temp_arr);//call  get info function

   $this->GetCompetitiveASIN($asin);

   $this->GetMyPriceASIN($asin);

   foreach ($temp_arr as $value) {

    $this->GetProductASIN($value);

   $this->InsertProduct($account_details,$value);//Insert Data into database

   }

 }   
   
 }


private function Initialize($account_details){ //Create Initialize Function//

   $this->MWS_AccessKey=$account_details->MWS_AccessKey;

   $this->MarketplaceID=$account_details->MarketPlaceID;

   $this->SellerID=$account_details->SellerID;

   $this->MWS_SecretKey=$account_details->MWS_SecretKey;

   $this->config = array (
   'ServiceURL' => $this->serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'ProxyUsername' => null,
   'ProxyPassword' => null,
   'MaxErrorRetry' => 3,
 );

 $this->service = new MarketplaceWebServiceProducts_Client( //Assign values For Service//
 $this->MWS_AccessKey,
 $this->MWS_SecretKey,
 $this->ApplicationName,
 $this->ApplicationVersion,
 $this->config);  
}

private function GetInfo($asin){ //Create GetInfo Function//

  try {      
        $this->request = new MarketplaceWebServiceProducts_Model_GetMatchingProductRequest(); //Create object for  MarketplaceWebServiceProducts_Model_GetMatchingProductRequest//
        
        $this->request->setSellerId($this->SellerID);//Set Seller Id//
        
        $this->request->setMarketplaceId($this->MarketplaceID);//Set MarketplaceID//
      
        $asin_list = new MarketplaceWebServiceProducts_Model_ASINListType();  //Set ASINList //

        $asin_list->setASIN($asin);

        $this->request->setASINList($asin_list);

        $response =$this->service->getMatchingProduct($this->request);  //Create response for Matching Product//

        if ($response->isSetGetMatchingProductResult()) {   //Checks for result format

            $getMatchingProductsResult = $response->getGetMatchingProductResult();  //Get Result Data from result meta data
            
               foreach ($getMatchingProductsResult as $pro_info) {

                     $products = $pro_info->getProduct();  //Gets product data from result data array
                
                      $ASIN=$pro_info->getASIN();

                      array_push($this->asin_array,$ASIN);

                     $fieldData = $products->getAttributeSets();

                     $dataFlds = $fieldData->getAny();

                    foreach ($dataFlds[0]->getElementsByTagName('Brand') as $node) { //Process Xml data//

                     array_push($this->brand,$node->nodeValue);//Get Product Brand 
                      
                     $this->temp_brand=array_combine($this->asin_array, $this->brand);  //combine array values

                 }  
               foreach ($dataFlds[0]->getElementsByTagName('Title') as $node) {//Process Xml data//
 
                  array_push($this->title, $node->nodeValue);//Get Product Title//

                    $this->temp_title=array_combine($this->asin_array, $this->title);//combine array values
                
              }  
               foreach ($dataFlds[0]->getElementsByTagName('URL') as $node) {//Process Xml data//

                  array_push($this->URL, $node->nodeValue);//Get Image URL//  

                     $this->temp_URL=array_combine($this->asin_array,  $this->URL);  //combine array values
                  
              }
       }
           
        }
     } 
     catch (MarketplaceWebServiceProducts_Exception $ex) {//Error Response  code

        echo("Caught Exception: " . $ex->getMessage() . "\n");
     }

}



private function GetProductASIN($asin_val){ //Create Function for GetProductCategoriesForASIN//

  try{

     $this->request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest(); // Create a MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN

     if ($this->request instanceof MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest) {

       $this->request->setSellerId($this->SellerID);//Set MarketplaceID//
        
        $this->request->setMarketplaceId($this->MarketplaceID);  //Set MWS_Auth Token//

        $this->request->setMWSAuthToken($this->MarketplaceID);   //Set ASIN//

        $this->request->setASIN($asin_val);

        $response =$this->service->getProductCategoriesForASIN($this->request);

        if($response->isSetGetProductCategoriesForASINResult()){

          $GetProductCategoriesForASIN=$response->getGetProductCategoriesForASINResult();

         $selfVal = $GetProductCategoriesForASIN->getSelf(); 

         array_push($this->ProductCategoriesForASIN,$asin_val);

      array_push($this->product_category,$selfVal[0]->getProductCategoryName());//Get Product Category Name//

      $this->temp_category=array_combine($this->ProductCategoriesForASIN,$this->product_category);//combine array values

        }

      }
         
  }
  catch(MarketplaceWebServiceProducts_Exception $ex){//Error Response  code

        echo("Caught Exception: " . $ex->getMessage() . "\n");

  }

}


private function GetCompetitiveASIN($asin){//Create Function for GetProductCategoriesForASIN//

  try{
 
     $this->request = new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest();    // Create a MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN

    if ($this->request instanceof MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest) {
   
         $this->request->setSellerId($this->SellerID); //Set Seller Id//
        
        $this->request->setMarketplaceId($this->MarketplaceID);//Set MarketplaceID//
       
        $this->request->setMWSAuthToken($this->MarketplaceID); //Set MWS_Auth Token//

        $asin_list=new MarketplaceWebServiceProducts_Model_ASINListType(); //Set ASIN//

        $asin_list->setASIN($asin);

        $this->request->setASINList($asin_list);
        
        $response=$this->service->getCompetitivePricingForASIN($this->request);//Create Response for competitive pricing ASIN

        if($response->isSetGetCompetitivePricingForASINResult()){

       $CompetitiveASIN=$response->getGetCompetitivePricingForASINResult();
     
       foreach ($CompetitiveASIN as $products) {

       $listData =$products->getProduct();

       $ASIN=$products->getASIN();//Get Product ASIN

        array_push($this->CompetitiveASIN,$ASIN);//Push ASIN Values

        $amount=$listData->getCompetitivePricing()->getCompetitivePrices()->getCompetitivePrice()[0]->getPrice()->getLandedPrice()->getAmount();//Get Seller Price//

       $CurrencyType=$listData->getCompetitivePricing()->getCompetitivePrices()->getCompetitivePrice()[0]->getPrice()->getLandedPrice()->getCurrencyCode();

        array_push( $this->price, $amount.$CurrencyType);//Get Price And Cuurency code//

        $this->temp_price=array_combine($this->CompetitiveASIN,$this->price);  

        $id=$listData->getSalesRankings()->getSalesRank();  //Get productcategoryId rank

       foreach ($id as $obj_rank) { //Foreach for categoryId//

        if (preg_match('/^[0-9]+$/', $obj_rank->getProductCategoryId())) {//Checking For Category Id is Numeric or Not//

         array_push($this->rank,$obj_rank->getRank());//Get Rank

         $this->temp_rank=array_combine($this->CompetitiveASIN,$this->rank); //combine array values

 
       
        break;

       } 
    
       }      
       
      }
      
     }

  }
         
  }
 catch(MarketplaceWebServiceProducts_Exception $ex){//Error Response  code

        echo("Caught Exception: " . $ex->getMessage() . "\n");
  }

}




private function GetMyPriceASIN($asin){//GetMyPriceForASIN

  try{

 $this->request = new MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest();

 if ($this->request instanceof MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest) {

        $this->request->setSellerId($this->SellerID); //Set MarketplaceID//

        $this->request->setMarketplaceId($this->MarketplaceID);  //Set MWS_Auth Token//
      
        $this->request->setMWSAuthToken($this->MarketplaceID);     //Set ASINList //

        $asin_list = new MarketplaceWebServiceProducts_Model_ASINListType();

        $asin_list->setASIN($asin);

        $this->request->setASINList($asin_list);

        $response=$this->service->getMyPriceForASIN($this->request);

        if($response->isSetGetMyPriceForASINResult()){

        $MyPriceASIN=$response->getGetMyPriceForASINResult();

        foreach ($MyPriceASIN as $sku) {

       $MyPriceProduct=$sku->getProduct()->getOffers()->getOffer()[0]; //Get Seller SKU//

       $ASIN=$sku->getASIN();//Get Product ASIN

       array_push($this->MyPriceASIN,$ASIN);

      array_push($this->sellerSKU, $MyPriceProduct->getSellerSKU());//Get Seller SKU

      $this->temp_sku=array_combine($this->MyPriceASIN,$this->sellerSKU);//combine array values


        }

        }

        }
      }
   catch(MarketplaceWebServiceProducts_Exception $ex){//Error Response  code

        echo("Caught Exception: " . $ex->getMessage() . "\n");
  }

}

   private function InsertProduct($account_details,$value){//Insert Product Details In to Data base//

     $products_info=new Product_Info();//Create object for product information

     $products_info->AccountId=$account_details->AccountId;//Account Id

      $products_info->ASIN=$value;//Get ASIN
                  
      foreach ($this->temp_title as $key=>$temp_val) {//Get Product Title


       if($value==$key){

         $products_info->Title=$temp_val;

       }
       }
       foreach ($this->temp_URL as $key=>$temp_val) {//Get Image URL

       if($value==$key){
        
         $products_info->ImageUrl=$temp_val;
       }
       }
       foreach ($this->temp_brand as $key=>$temp_val) {//Get Brand Details

       if($value==$key){
         $products_info->Brand=$temp_val;
       }
       }
       foreach ($this->temp_category as $key=>$temp_val) { //Get Category Details

       if($value==$key){
         $products_info->Categories=$temp_val;
       }
       }
       foreach ($this->temp_price as $key=>$temp_val) {//Get Orice Details

       if($value==$key){
         $products_info->Price=$temp_val;
         $products_info->LowestPrice=$temp_val;
       }
       }
       foreach ($this->temp_sku as $key=>$temp_val) {//Get SKU Details

       if($value==$key){
         $products_info->SKU=$temp_val;
       }
       }
       foreach ($this->temp_rank as $key=>$temp_val) {//Get Rank Details

       if($value==$key){
         $products_info->Rank=$temp_val;
         $products_info->RankDifference=$temp_val;
       }

       }

    $products_info->UpdateProductInfo();

   }

}

?>