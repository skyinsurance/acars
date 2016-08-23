	<style>
	.header-new-main {
	margin-bottom:0px;
	}
	.form-height{
    height: 42px;
	}
	.img-width{
	width: 10%;
	}
	.img-padding{
	padding-left: 100px;
    padding-top: 31px;
	}
	</style>
	<div class=" box box-warning container-fluid">
	
	         <div class="box-header with-border">
              <h3 class="box-title">Edit Brand</h3>
			    <span style="float:right;"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/masterdata/index">Back to Manage Brand</a></span>
           
            </div>
						
			 <div class="col-xs-12 header-new-main width-98 hide"> 
				<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
				<p class="sub-header-new">You can edit brand from this screen.</p>
			</div> 
	<div class="col-md-12">
		<div class=" box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" style="margin-left: 33px;">
              <div class="box-body">
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Brand Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="" value="ACAReportingService.com
">
                  </div>
                  
                  <div class="col-sm-6 img-padding">
                  <img class="img-width" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/Logo_Image_02.png">
                  </div>
                </div>
                
                <div class="form-group">
                 <div class="col-sm-6">
                  <label class="control-label"><h4>Logo</h4></label>
                     <input type="file" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
             <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Support Email</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" value="aca@gmail.com" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Support Phone Number</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" value="9889898989" placeholder="">
                  </div>
                </div>
                
                
              </div>
              <!-- /.box-body -->
            <div class="box-footer pull-right" >
			<button type="submit"  class="btn btn-success ">Update</button>
                <a type="" class="btn btn-default" href="<?php echo Yii::$app->homeUrl;?>admin/masterdata">Cancel</a>
                
                </div> 
              <!-- /.box-footer -->
            </form>
          </div>
						</div>		
						</div>