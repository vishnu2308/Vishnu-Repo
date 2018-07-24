
     <section class="content-header">
      <h1 style="visibility:hidden;"> <?php echo $pagetitle; ?></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">General</li>
      </ol>
    </section>

    <section class="content">
     <div class="row">
     <div class="col-md-6 col-md-offset-3">
       <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div class="text-center">
              <img src="<?php echo base_url('assets/amz_components/img/Logo.png');?>" width="150" alt="logo">          
            </div>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b><i class="fa fa-building"></i>  Company Name</b> <a class="pull-right">SF Planet</a>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-envelope"></i>  Email Address</b> <a class="pull-right">sasi@valleypointtechnologies.com</a>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-clock-o"></i>  Time </b> <a class="pull-right">UTC-7:00 Mountain</a>
                </li>
              </ul>
             <div class="text-center">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#general_info" ><b> <i class="fa fa-pencil-square-o"></i> Edit</b></a>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
   </div>
   </section>

   <!--Modal-->
<div class="modal fade in" id="general_info">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" id="company-details" Method="POST" action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Edit Company Details</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="logo" class="col-md-3 control-label">Company Logo</label>

                            <div class="col-md-9">
                                <input id="logo" name="logo" type="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="c_name" class="col-md-3 control-label">Company Name</label>

                            <div class="col-md-9">
                                <input class="form-control" name="c_name" id="c_name" placeholder="Company Name" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-3 control-label"> Email Address</label>

                            <div class="col-md-9">
                                <input class="form-control" name="email" id="email" placeholder="Email Address" type="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="timezone" class="col-md-3 control-label">Time Zone</label>

                            <div class="col-md-9">
                                <select class="form-control" name="timezone" id="timezone">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>









