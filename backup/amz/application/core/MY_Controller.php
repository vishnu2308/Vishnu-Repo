<?php defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
  public $data = array();
  function __construct()
  {
    parent::__construct();
    $this->data['pagetitle']="";
    /*Script Integration*/
    $this->data['script']= array();
    /*Style Integration*/
    $this->data['link']= array();
  }
 public function layout($dashboard)
  {

  /*page header*/
    $this->template['header']=$this->load->view('layouts/header', $this->data,TRUE);
  /*page sidebar*/
    $this->template['sidebar']=$this->load->view('layouts/sidebar', $this->data,TRUE);
  /*page initialize*/
   $this->template['page']=$this->load->view($this->page, $this->data,TRUE);
  /*layout page Integration*/
  $this->load->view($dashboard,$this->template);

  }
   public function layout_settings($dashboard)
  {  
  /*page header*/
    $this->template['header']=$this->load->view('layouts/header_settings', $this->data,TRUE);
  /*page sidebar*/
    $this->template['sidebar']=$this->load->view('layouts/sidebar_settings', $this->data,TRUE);
  /*page initialize*/
   $this->template['page']=$this->load->view($this->page, $this->data,TRUE);
  /*layout page Integration*/
  $this->load->view($dashboard,$this->template);
  }

}
?>