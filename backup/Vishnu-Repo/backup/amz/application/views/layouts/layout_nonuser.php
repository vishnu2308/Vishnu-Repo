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
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/amz_components/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/amz_components/css/skins/_all-skins.css">

</head>

      <?php echo (isset($page) && is_array($page)) ? implode("\n",$page) :$page?>



<script type="text/javascript">
  var baseURL = "<?php echo base_url(); ?>";
</script>
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- <script src="/js/core/jquery.countTo.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
<!--<script src="/js/core/jquery.placeholder.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.3.1/jquery.placeholder.min.js"></script>
<!--<script src="/js/core/js.cookie.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js"></script>
<!-- Validation Js -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-validation/jquery.validate.js"></script> 
<script src="<?php echo base_url();?>assets/bower_components/jquery-validation/additional-methods.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/amz_components/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/amz_components/js/demo.js"></script>
 <!-- page Js and specific Plugin-->
<?php echo (isset($script) && is_array($script)) ? implode("\n",$script) :$script?>

</body>

</html>