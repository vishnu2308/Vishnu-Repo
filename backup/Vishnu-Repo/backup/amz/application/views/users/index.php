<section class="content-header">
    <h1 style="visibility:hidden;"> <?php echo $pagetitle; ?></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Profile Image -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Users Details</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#user_list">Add User</button>
                    </div>
                </div>
                <div class="box-body box-profile">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped  text-center  js-sellerList_table dataTable">
                            <thead>
                                <tr>
                                    <th>USER NAME</th>
                                    <th>MAIL ID</th>
                                    <th>ROLE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Admin</td>
                                    <td>61</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>

<!--Modal-->
<div class="modal fade in" id="user_list" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Add User</h4>
            </div>
            <form action="/Users/AddUsers" class="form-horizontal" id="form1" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user_name" class="col-md-3 control-label">UserName</label>
                        <div class="col-md-9">
                            <input class="form-control" id="user_name" placeholder="User Name" name="UserName" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" placeholder="Email" id="email" name="Email" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role" class="col-md-3 control-label">Role</label>
                        <div class="col-md-9">
                            <select name="Role" id="role" class="form-control">
                                <option value="" selected="">Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Standard">Standard</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="btnAdd" id="btnAdd" class="btn btn-primary" type="submit">Save</button>
                     <button class="btn btn-default" data-dismiss="modal" type="submit">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>