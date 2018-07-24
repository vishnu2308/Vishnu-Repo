 <body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url();?>">
      <div class="text-center">
          <img src="<?php echo base_url('assets/amz_components/img/Logo.png');?>" class="hidden-xs" alt="AMZ" width="150">
        </div>
    </a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form id="sign_up" action="<?php echo base_url('auth/Register/RegisterForm');?>" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="c_name" placeholder="Company Name" required autofocus>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
            <div class="form-group has-feedback">
        <input type="text" class="form-control" id="username" name="user_name" placeholder="User Name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a  href="<?php echo base_url('auth/Login');?>">I already have a membership</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>


