<section class="content-header">
    <h1 style="visibility:hidden;"> <?php echo $pagetitle; ?></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Accountsettings</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header">
                    <h5 class="box-title">Plan Details</h5>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table  table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Plan Name</th>
                                    <th>Price</th>
                                    <th>Products</th>
                                    <th>Users</th>
                                    <th>Reports</th>
                                    <th>Email Alerts</th>
                                    <th>Plan Activated Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Ultimate
                                    </td>
                                    <td>$0 /Month</td>
                                    <td>Unlimited</td>
                                    <td>Unlimited</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                    <td>12/06/2018</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table  table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Invoice Number</th>
                                    <th>Invoice Date</th>
                                    <th>Invoice Amount</th>
                                    <th>Send Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Ultimate
                                    </td>
                                    <td>$0 /Month</td>
                                    <td>Unlimited</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Email Invoice</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h5 class="box-title">Payment Details</h5>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table   table-striped">
                            <tbody>
                                <tr>
                                    <td>
                                        Last Payment Received
                                    </td>
                                    <td>:</td>
                                    <td>$0 /Month</td>
                                </tr>
                                <tr>
                                    <td>
                                        Next Amount Due
                                    </td>
                                    <td>:</td>
                                    <td>$0 /Month</td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Unsubscribe">Unsubscribe</button>
                            <button class="btn btn-primary btn-sm">Change Plan</button>
                        </div>
                    </div>
                    <!-- /.table-responsive -->
                </div>

            </div>
        </div>
    </div>
</section>
<!--Modal-->
<div class="modal fade" id="Unsubscribe" aria-hidden="false">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Unsubscribe Plan</h4>
            </div>
            <div class="modal-body">
                Do you really want to unsubscribe?
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="/Subscription/Unsubscribe">Confirm</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!--Modal end-->

<div class="modal fade in" id="plan" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Change Plan</h4>
            </div>
            <div id="changeplan">
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Plan Name </th>
                                <th>Plan Price </th>
                                <th>Products </th>
                                <th>Users </th>
                                <th>Reports</th>
                                <th>Email Alerts</th>
                            </tr>
                            <tr>
                                <td>Starter</td>
                                <td>$49 /Month</td>
                                <td>100</td>
                                <td>2</td>
                                <td>Yes</td>
                                <td>No</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="/">Ultimate</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="/Subscription/Changeplan">Change</a>

            </div>
        </div>
    </div>
</div>