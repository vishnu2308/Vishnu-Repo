<section class="content-header">
    <h1 style="visibility:hidden;"> <?php echo $pagetitle; ?></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Products</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <div class="col-md-12">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <span class="box-title">Click here for the Sample Input file Format </span>
                    <span class="pull-right">Upload Input ASIN for Crawling</span>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form method="POST" id="import_csv_file">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <input id="file" name="file" type="file">
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                        </form>
                        <form method="POST" id="import_csv-value">
                            <div class="col-xs-5">
                                <div class="input-group">
                                    <input class="form-control" name="asin_val" placeholder="ASIN Value" type="text">
                                    <!-- /btn-group -->
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Uploaded Products</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-header" style="border-bottom: none;">
                                <button type="button" class="btn btn-primary">Remove Selected</button>
                                <div class="input-group pull-right">
                                    <input class="form-control" id="myInputTextField" placeholder="Search by Asin/Date" style="width:200px;" type="text">
                                    <span class="input-group-btn pull-left">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>

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
                                    <td>DATE</td>
                                    <td>ASIN</td>
                                    <td>REMOVE</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td><a href="read-mail.html">Alexander Pierce</a></td>
                                    <td>B01LWYYFG0</td>
                                    <td><i class="fa fa-trash"></i></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
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