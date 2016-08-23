<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>ACA Reporting Service | Full Service ACA Reporting</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9" />


   <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/css/custom.css" rel="stylesheet" type="text/css" />
   
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

			 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 <script type="text/javascript"
	src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<link
	href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"
	rel="stylesheet">

            
		<link rel="shortcut icon" type="image/png" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/favicon.png" >
   
  
	<style>
#header_back {
  
	border-bottom: 1px solid #C5C5C5;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

       margin-top: 7% !important;
	
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

.tls {
    font-family: 'IM Fell French Canon SC', serif;
    color: #000;
    font-size: 52px;
}
</style>


</head>
<body style="background-color: rgba(245, 240, 230, 0.5);">
<div class="wrap">
<header class="header" id="header_back" style="background:url(<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/Images/loginpage-header.png);height:85px;">
<div class="" >
<div class="col-md-1 pull-left" style="padding :0px;">
  <a style="font-size: 25px; background: none; color: #367fa9;" class="logo pl-0" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>"> <!-- Add the image.jpg and option.png class icon to your logo image or logo icon to add the margining -->
			<img class="logo-style" style="cursor:pointer;" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/Images/ACA-Reporting-Logo.png">

		</a>
</div>
<div class="col-md-8"></div>

<!-- <div class="col-md-3"><h3 class="fldp" style="margin-top:9%;color:white;">Delivery System</h3></div> -->

<div id="header" class="container  col-xs-0" style="padding:0px;">
<div class="col-md-1 col-xs-3" style="padding:0px;">
<h1>	
</h1>
			</div>
			
			<!--<a id="menu-drop-button" href="#"></a>-->
			 <div id="navigation-container" class="col-md-5 col-xs-9" style="padding-right:0px;">
						<div class="header_text">
					<h1 class="tls" style="font-family: -webkit-pictograph;font-size: 43px;"></h1>
					
				</div>
						
			</div>
		</div>
</div>
          
            <!-- Header Navbar: style can be found in header.less -->
            
        </header>

    <div class="container" style="padding: 70px 15px 20px;">       
    
     <?= $content ?>
    </div>
</div>


    <div class="container" style="padding: 10px;">
        <p style="text-align:center"> &#169;Copyright 2016 Sky Insurance Technologies. All rights reserved. <?php //date('Y') ?></p>

     
    </div>
	
	
	<div class="modal fade" id="mychangepassword" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Recover Password</h4>
			</div>
			<div class="modal-body">
				<div class="col-sm-2 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">Email:</label>
				</div>
				<div class="col-sm-10">
					<input type="text" class="form-control add-member-input"
						style="width: 100%;" placeholder="Enter email...."
						id="recover-email-id" /> <label class="error-msg  red"
						id="recover-error-messages"></label> <span class="green error-msg"
						id="recover-success-message"></span>
				</div>

			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" onclick="clearFields();">Close</button>
				<button type="button" class="btn btn-primary btn-sm"
					onclick="#">Submit</button>
			</div>
		</div>
	</div>
</div>
<script>
function clearFields(){
	
$('#recover-email-id').val('');	
}
</script>
</body>
              
			  
</html>

