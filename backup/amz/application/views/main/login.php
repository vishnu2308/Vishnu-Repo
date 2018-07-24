<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>">
      <div class="text-center">
          <img src="<?php echo base_url('assets/amz_components/img/Logo.png');?>" class="hidden-xs" alt="AMZ" width="150">
        </div>
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form  id="log_in" action="<?php echo base_url('auth/Login/Authenticate');?>" method="POST">
            <div class="form-group has-feedback">
        <input type="text" class="form-control" name="user_name" placeholder="User Name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="err-notification"></div>
      <div class="row">
        <div class="col-xs-8">
              <a href="<?php echo base_url('auth/Register');?>">Register a new membership</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   <br> <a href="#">I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>