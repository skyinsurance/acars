<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use dmstr\widgets\Alert;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>ACA Reporting Service | Full Service ACA Reporting</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--<meta http-equiv="X-UA-Compatible" content="IE=9" /> -->


	<link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/css/custom.css" rel="stylesheet" type="text/css" />
   
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
          
	<link rel="shortcut icon" type="image/png" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/favicon.png" />
   
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/validation.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
<div class="wrap">
<header class="header" id="header_back" style="background:url(<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/Images/loginpage-header.png);height:85px;">
<div class="" >
<div class="col-md-1 pull-left no-padding" >
  <a  class="logo pl-0" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>"> <!-- Add the image.jpg and option.png class icon to your logo image or logo icon to add the margining -->
			<img alt="" class="logo-style pull-left"  src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/Images/ACA-Reporting-Logo.png">

		</a>
</div>
<!-- <div class="col-md-8"></div>

 

<div id="header" class="container  col-xs-0 no-padding" >
		
		</div> -->
</div>
          
            <!-- Header Navbar: style can be found in header.less -->
            
        </header>

    <div class="container" style="padding: 70px 15px 20px;">       
    
      <section class="content">
        <?php echo Alert::widget(); ?>
        <?php echo $content; ?>
    </section>
    </div>
</div>


    <div class="container" >
        <p style="text-align:center"> &#169;Copyright 2016 Sky Insurance Technologies. All rights reserved.</p>

     
    </div>
	
	
	<div class="modal fade" id="mychangepassword" tabindex="-1"
	role="dialog" aria-labelledby="myModalRecover" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="$('#recover-email-id').val('');">&times;</button>
				<h4 class="modal-title" id="myModalRecover">Recover Password</h4>
			</div>
			<form id="resetpassword">
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-2 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">Email:</label>
				</div>
				<div class=" col-sm-10">
					<input type="text" class="form-control add-member-input full-width" placeholder="Enter email...."
						id="recover-email-id" name="email"/> <span class="error-msg  red"
						id="recover-error-messages"></span> <span class="green error-msg"
						id="recover-success-message"></span>
				</div>
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >Close</button>
				<button type="button" class="btn btn-primary btn-sm"
					onclick="return validateforgotpassword();">Submit</button>
			</div>
			</form>
		</div>
	</div>
</div>


<div class="modal fade" id="myresetlink" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="$('#recover-reset-link').val('');">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Reset Verification Link</h4>
			</div>
			<form id="resetlink">
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-2 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">Email:</label>
				</div>
				<div class=" col-sm-10">
					<input type="text" class="form-control add-member-input full-width"
						 placeholder="Enter email...."
						id="recover-reset-link" name="email"/> <span class="error-msg  red"
						id="recover-error-link"></span> <span class="green error-msg"
						id="recover-success-link"></span>
				</div>
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >Close</button>
				<button type="button" class="btn btn-primary btn-sm"
					onclick="return validateresetverification();">Submit</button>
			</div>
			</form>
		</div>
	</div>
</div>

</body>


	

		  
</html>

