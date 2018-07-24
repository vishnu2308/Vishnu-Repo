<?php
//Required Files//
require APPPATH.'php_libaries/Sellers/src/MarketplaceWebServiceSellers/Samples/.config.inc.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Client.php';   
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/ASINListType.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/ProductList.php';
//Get Matchinhg Product//
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetMatchingProductRequest.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetMatchingProductResponse.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetMatchingProductResult.php';
//Get Categories for ASIN//
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetProductCategoriesForASINRequest.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetProductCategoriesForASINResponse.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetProductCategoriesForASINResult.php';
//Get Competitive price for ASIN//
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetCompetitivePricingForASINRequest.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetCompetitivePricingForASINResponse.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetCompetitivePricingForASINResult.php';
//Get MY price for ASIN//
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetMyPriceForASINRequest.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetMyPriceForASINResponse.php';
require APPPATH.'php_libaries/Products/src/MarketplaceWebServiceProducts/Model/GetMyPriceForASINResult.php';
//Manager Files//
require APPPATH.'DataModels/ProductInfo.php';
?>