<?php
require_once('.config.inc.php');
require_once APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForASINRequest.php';
class MWS_Manager{
  
  //Variable Declaration//
 public $serviceUrl="https://mws.amazonservices.com",
 $MWS_AccessKey="AKIAJM2SCJXTFWYTKCGQ",
 $MWS_SecretKey="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",
 $SellerID="A19R3BN6ZSO9A1",
 $MarketplaceID="ATVPDKIKX0DER",
 $ApplicationName="Amazon",
 $ApplicationVersion="1.0";

     $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'ProxyUsername' => null,
   'ProxyPassword' => null,
   'MaxErrorRetry' => 3,
 );

 $service = new MarketplaceWebServiceProducts_Client(
         $MWS_AccessKey,
        $MWS_SecretKey,
         $ApplicationName,
         $ApplicationVersion,
        $config);     

 $request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest();
 $request->setSellerId($SellerID);
 // object or array of parameters
 invokeGetProductCategoriesForASIN($service, $request);

 public function GetInfo(){

  try {
    $request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest();
    $response = $service->GetMatchingProduct($this->request);
    $request->setSellerId($this->$SellerID);
    $request->setIdList("B00004YRPE");
        echo ("Service Response\n");
        echo ("=============================================================================\n");
        $dom = new DOMDocument();
        $dom->loadXML($response->toXML());
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        echo $dom->saveXML();
        echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
     } catch (MarketplaceWebServiceProducts_Exception $ex) {
        echo("Caught Exception: " . $ex->getMessage() . "\n");
        echo("Response Status Code: " . $ex->getStatusCode() . "\n");
        echo("Error Code: " . $ex->getErrorCode() . "\n");
        echo("Error Type: " . $ex->getErrorType() . "\n");
        echo("Request ID: " . $ex->getRequestId() . "\n");
        echo("XML: " . $ex->getXML() . "\n");
        echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }

}
}
?>