<?php
/*MWS Controller*/
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'Managers/MWS_Manager.php';

require_once APPPATH.'Managers/Products_Manager.php';

class MWS_Controller extends CI_Controller{
	public function Index(){

     $credentials=new Products_Manager(); //Object for Products Manager//

     $credentials->UpdateProducts();

	}
}

?>