<section class="content-header">
    <h1 style="visibility:hidden;"> <?php echo $pagetitle; ?></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Privacysettings</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="box box-primary">
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input class="form-control" id="name" placeholder="Name" type="text" required readonly>
                </div>
               <div class="form-group">
                  <label for="access_level">Access Level</label>
                  <input class="form-control" id="access_level" placeholder="Admin" type="text"  required readonly>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-center">
                <a href="#"   data-toggle="modal" data-target="#Privacysetting"><i class="fa fa-key"></i> Click here to change password</a>
              </div>
            </form>
          </div>
        </div>
    </div>
</section>

<div class="modal fade in" id="Privacysetting">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Change Password</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="old_pwd" class="col-md-3 control-label">Old Password</label>
                            <div class="col-md-9">
                                <input class="form-control" id="old_pwd" placeholder="Enter Old Password" type="password">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="new_pwd" class="col-md-3 control-label">New Password</label>

                            <div class="col-md-9">
                                <input class="form-control" id="new_pwd" placeholder="Enter New Password" type="password">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="c_pwd" class="col-md-3 control-label">Confirm Password</label>
                            <div class="col-md-9">
                                <input class="form-control" id="c_pwd" placeholder="Confirm New Password" type="password">
                            </div>
                        </div>


                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>