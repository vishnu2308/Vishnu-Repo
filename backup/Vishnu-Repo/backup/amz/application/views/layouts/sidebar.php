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
          <a href="<?php echo base_url('ProductView');?>" >
            <i class="fa fa-th"></i> <span>Product View</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('SellerView');?>">
            <i class="fa fa-user"></i> <span>Seller View</span>
          </a>
        </li>
        <li>
          <a href="javascript:void(0);" data-toggle="modal" data-target="#Add-Product-ASIN">
            <i class="fa fa-plus"></i> <span>Add Product</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
