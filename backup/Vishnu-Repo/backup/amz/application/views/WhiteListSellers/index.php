<section class="content-header">
    <h1 style="visibility:hidden;"> <?php echo $pagetitle; ?></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">WhiteListSellers</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title">WhiteListSellers List</h5>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-header" style="border-bottom: none;">
                                <button type="button" class="btn btn-primary">Remove Selected</button>

                                <div class="input-group pull-right" style="width:300px;margin-left:10px;">

                                    <input class="form-control" type="text" placeholder="Seller ID" required>
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-default">Add</button>
                                    </span>
                                </div>
                                <div class="pull-right" style="width:300px">
                                    <input class="form-control" type="text" placeholder="Seller Name" required>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>SELECT</td>
                                     <td>#</td>
                                    <td>WHITELIST SELLER ID </td>
                                    <td>WHITELIST SELLER NAME</td>
                                    <td>REMOVE</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                     <td>1</td>
                                    <td><a href="read-mail.html">Alexander Pierce</a></td>
                                    <td>B01LWYYFG0</td>
                                    <td><i class="fa fa-trash"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                      <td>2</td>
                                    <td><a href="read-mail.html">Alexander Pierce</a></td>
                                    <td>B01LWYYFG0</td>
                                    <td><i class="fa fa-trash"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>

            </div>
        </div>
    </div>
</section>