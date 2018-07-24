<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $pagetitle;?></title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <!-- Web fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
 <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/amz_components/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/amz_components/css/skins/_all-skins.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">
   
   <div class="wrapper">
 
     <?php echo (isset($header) && is_array($header)) ? implode("\n",$header) :$header?>
    <!-- #Top Bar -->
     <!--Side bar-->
      <?php echo (isset($sidebar) && is_array($sidebar)) ? implode("\n",$sidebar) :$sidebar?>
     <!--sidebar end-->
      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php echo (isset($page) && is_array($page)) ? implode("\n",$page) :$page?>
   </div>

</div>
    
 <!--Add Product ASIN Moadal-->
   <div class="modal fade in" id="Add-Product-ASIN" style="padding-right: 17px;">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Add Product</h4>
              </div>
              <div class="modal-body">
              
              <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <span class="box-title">Click here for the Sample Input file Format </span>
              <span class="pull-right">Upload Input ASIN for Crawling</span>
            </div>
            <div class="box-body">
              <div class="row">
                <form>
                <div class="col-xs-4">
                   <div class="form-group">
                  <input id="exampleInputFile" type="file">
                </div>
                </div>
                <div class="col-xs-3">
                  <button type="submit" class="btn btn-primary">Upload</button>
                </div>
                <div class="col-xs-5">
                 <div class="input-group">
                  <input class="form-control" type="text" placeholder="ASIN Value">
                  <!-- /btn-group -->
                  <div class="input-group-btn">
                   <button type="button" class="btn btn-primary">Add</button>
                 </div>
               </div>
                </div>
              </form>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
            </div>
          </div>
        </div>
<!--End Modal-->

<!-- jQuery 3 -->
<script type="text/javascript">
  var baseURL = "<?php echo base_url(); ?>";
</script>
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/amz_components/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/amz_components/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Validation Js -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-validation/jquery.validate.js"></script> 
<script src="<?php echo base_url();?>assets/bower_components/jquery-validation/additional-methods.js"></script>

 <!-- page Js and specific Plugin-->
<?php echo (isset($script) && is_array($script)) ? implode("\n",$script) :$script?>

</body>

</html>