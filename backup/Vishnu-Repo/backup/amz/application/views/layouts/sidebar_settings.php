<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="text-center  logo_settings">
          <img src="<?php echo base_url('assets/amz_components/img/Logo.png');?>" class="hidden-xs" alt="AMZ" width="150">
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
         <a href="<?php echo base_url('General/General');?>">

           <i class="fa fa-info-circle"></i> <span>General</span>
           
         </a>
        </li>
        <li>
         <a href="<?php echo base_url('AddProducts/AddProducts');?>">
           <i class="fa fa-plus"></i> <span>Add Products</span> 
         </a>
        </li>
        <li>
           <a href="<?php echo base_url('WhiteListSellers/WhiteListSellers/');?>">
             <i class="fa fa-handshake-o"></i> <span> Whitelist Sellers</span> 
            </a>
        </li>
        <li>
         <a href="<?php echo base_url('AmazonMWSSetup/AmazonMWSSetup');?>">
         <i class="fa fa-wrench"></i> <span>Amazon MWS Setup</span>  
         </a>
        </li>
        <li>
         <a href="<?php echo base_url('General');?>">
       <i class="fa fa-envelope"></i> <span>Email Template</span>   
         </a>
        </li>
        <li>
         <a href="<?php echo base_url('Users/Users');?>">
        <i class="fa fa-user"></i> <span> Users</span>     
         </a>
        </li>
        <li>
         <a href="<?php echo base_url('Privacysetting/Privacysetting');?>">
         <i class="fa fa-user-secret"></i> <span>Privacy Settings</span> 
         </a>
        </li>
        <li>
         <a href="<?php echo base_url('AccountSettings/AccountSettings');?>">
        <i class="fa fa-lock"></i> <span>Account Settings</span>    
         </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>