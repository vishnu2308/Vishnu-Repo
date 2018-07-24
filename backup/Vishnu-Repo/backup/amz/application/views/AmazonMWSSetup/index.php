<section class="content-header">
    <h1 style="visibility:hidden;"> <?php echo $pagetitle; ?></h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">AmazonMWSSetup</li>
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
                  <label for="merchantID">MerchantID</label>
                  <input class="form-control" id="merchantID" placeholder="MerchantID" type="text" required readonly>
                </div>
               <div class="form-group">
                  <label for="marketplaceID">MarketplaceID</label>
                  <input class="form-control" id="marketplaceID" placeholder="MarketplaceID" type="text"  required readonly>
                </div>
                 <div class="form-group">
                  <label for="accessKeyId">AccessKeyId</label>
                  <input class="form-control" id="accessKeyId" placeholder="AccessKeyId" type="password"  required readonly>
                </div>
                <div class="form-group">
                  <label for="secret_key">SecretAccessKey</label>
                  <input class="form-control" id="secret_key" placeholder="SecretAccessKey" type="password" required readonly>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-center">
                <button class="btn btn-primary">Edit</button>
                 <button type="submit" class="btn btn-primary hide">Cancel</button>
                 <button  class="btn btn-primary hide">Save</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</section>