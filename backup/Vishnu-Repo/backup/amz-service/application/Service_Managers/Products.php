<?php 
//	require APPPATH.'DataModels/ProductInfo.php';
	//Manager to handle Product Deatails related logics
  class ProductManager extends BaseManager{	 
   public function Get_Product(){
          $products_info=new Product_Info();
          $products_info->AccountId =  $this->GetGUID();//GUID Creation
          $products_info->ASIN =$ASIN;
          $products_info->SKU=$SKU ; 
          $products_info->Title=$Title; 
          $products_info->Brand=$Brand ;
          $products_info->Price=$Price;
          $products_info->Rank =$Rank;
          $products_info->Categories=$Categories;
          $products_info->ImageUrl=$ImageUrl;
          $products_info->LowestPrice=$LowestPrice;
          $products_info->RankDifference=$RankDifference;
          $products_info->SellerCount=$SellerCount;
          $products_info->CrawlingId = $CrawlingId;      
          $products_info->Insert();
   }
	}
?>