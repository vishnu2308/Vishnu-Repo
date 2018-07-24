<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class AddProducts extends MY_Controller {

    var $layout_path='layouts/layout_settings';

  public function __construct()
  {
    parent::__construct();
    $this->load->model('excel_import_model');
    $this->load->library('excel');
  }

  function Index() { //Add Products Page
     $this->page='AddProducts/index';
     $this->data['pagetitle']="Add Products";  
     $this->data['script']='<script src="'.base_url('assets/amz_components/js/pages/addproduct.js').'"></script>';
     $this->layout_settings($this->layout_path);
  }  

function fetch()
  {
    $data = $this->excel_import_model->select();
    $output = '
    <h3 align="center">Total Data - '.$data->num_rows().'</h3>
    <table class="table table-striped table-bordered">
      <tr>
        <th>Customer Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Postal Code</th>
        <th>Country</th>
      </tr>
    ';
    foreach($data->result() as $row)
    {
      $output .= '
      <tr>
        <td>'.$row->CustomerName.'</td>
        <td>'.$row->Address.'</td>
        <td>'.$row->City.'</td>
        <td>'.$row->PostalCode.'</td>
        <td>'.$row->Country.'</td>
      </tr>
      ';
    }
    $output .= '</table>';
    echo $output;
  }

    function import()
  {
    if(isset($_FILES["file"]["name"]))
    {
      $path = $_FILES["file"]["tmp_name"];
      $object = PHPExcel_IOFactory::load($path);
      foreach($object->getWorksheetIterator() as $worksheet)
      {
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();
        for($row=2; $row<=$highestRow; $row++)
        {
          $customer_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $address = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
          $city = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
          $postal_code = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
          $country = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
          $data[] = array(
            'CustomerName'    =>  $customer_name,
            'Address'     =>  $address,
            'City'        =>  $city,
            'PostalCode'    =>  $postal_code,
            'Country'     =>  $country
          );
        }
      }
      $this->excel_import_model->insert($data);
      echo 'Data Imported successfully';
    } 
  }


   } 
?>