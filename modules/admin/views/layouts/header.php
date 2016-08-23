<?php

use yii\helpers\Html;
use app\models\StaffDetails;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */
?>
<style>

.skin-blue .main-header .logo{
background-color: #222d32!important;
}

.skin-blue .main-header .navbar {
    background-color: #222d32!important;
}
.box-title {
    display: inline-block !important;
   font-size: 22px !important;
    color: #222D32 !important
    margin: 0 !important;
    line-height: 1 !important;
}
@media (min-width: 768px)
{
.sidebar-mini.sidebar-collapse .main-header .navbar {
    margin-left: 280px !important;
}
}

@media (min-width: 768px)
{
.sidebar-mini.sidebar-collapse .main-header .logo {
    width: 280px !important;
}
}


@media (min-width: 768px)
{
.sidebar-mini.sidebar-collapse .sidebar-menu>li:hover>a>span:not(.pull-right), .sidebar-mini.sidebar-collapse .sidebar-menu>li:hover>.treeview-menu {
    display: block !important;
    position: absolute;
    width: 220px !important;
    left: 50px;
}
}

.main-header .logo{
	height: 60px;
	line-height: 60px;
}
.main-header .sidebar-toggle
{
line-height: 30px;	
}

.navbar-nav>.user-menu .user-image
{
	margin-top:2px;
}
#dropd{
	line-height: 30px;	
}
.main-sidebar, .left-side{
	padding-top: 60px;
}
</style>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<header class="main-header">

    <?= Html::a('<div class="col-md-2 padding-0"><img style="width: 214px;" src="/Images/ACA-Reporting-Logo.png" class=" hidden-xs hidden-sm" height="40px;" ></div>', Yii::$app->homeUrl.'admin/clients', ['class' => 'logo','style'=>'padding: 0 2px;']) ?>

    <nav class="navbar navbar-static-top" role="navigation" >

        <a  href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
 <div class=" col-lg-4 col-xs-hidden ">
         <div class=" col-lg-8 padding-left-0 padding-right-0">
         <select class="form-control" id="shadow_login_id" style="margin-top: 13px;"><option value="0">Select Client</option><option value="1">Jack Smith</option></select>
         </div>
         <div class=" col-lg-3 padding-right-0" style="padding-left:5px;">
         <button class="form-control btn btn-success" style="margin-top: 13px;" onclick="shadowlogin();">Go</button>
         </div>
         </div>
        <div class="navbar-custom-menu pull-right col-lg-6 col-xs-3">

            <ul class="nav navbar-nav pull-right">

                <!-- Messages: style can be found in dropdown.less-->
               
        
                <!-- Tasks: style can be found in dropdown.less -->
               
                <!-- User Account: style can be found in dropdown.less -->
<?php 
$session = Yii::$app->session;
$logged_id = $session['logged_id'];
//$getdata= StaffDetails::find()->where(['=','user_id', $logged_id])->one();
$getdata=array();
?>
                <li class="dropdown user user-menu" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropd">
					<?php if(!empty($getdata->imageFile)){?>
                        <img src="http://reporting.uslawshield.com/uploads/<?php echo $logged_id; ?>/<?php echo $getdata->imageFile; ?>" class="user-image" alt="User Image"/>
						<?php }else{ ?>
						
						 <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/report_1_28146_default.png" class="user-image" alt="User Image"/>
						<?php } ?>
                        <span style="color:white!important;" class="hidden-xs">John Smith</span>
						<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" >
                        <!-- User image -->
                        <li class="user-header">
						<div>
						<?php if(!empty($getdata->imageFile)){?>
                            <img src="http://reporting.uslawshield.com/uploads/<?php echo $logged_id; ?>/<?php echo $getdata->imageFile; ?>" class="img-circle" style="    height: 80px;width: 80px;float: initial;
                                 alt="User Image"/>
								 
								 <?php }else{ ?>
						
						 <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/report_1_28146_default.png" class="user-image" alt="User Image" style="    height: 80px;width: 80px;float: initial;"/>
						<?php } ?>
						</div>
                            <p>
                                <?php // echo $getdata->first_name.' '.$getdata->last_name ?>
                                <small>Member since <?php // echo $getdata->created_date;?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                      
                        <!-- Menu Footer-->
                        <li class="user-footer">
						<!--<div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>-->
                            <div class="col-md-3" style="padding-left: 0px;">
                                <a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users/updateusers" class="btn btn-default btn-flat no-wrap"  style="    padding: 5px;">Profile</a>
                            </div>
							<div class="col-md-6" style="padding-left: 0px;">
                                <a data-toggle="modal" data-target="#myModal-change-pswd" class="btn btn-default btn-flat no-wrap" style="    padding: 5px;">Change Password</a>
                            </div>
                           <div class="col-md-3" style="padding-left: 0px;">
                                <a class="btn btn-default btn-flat no-wrap" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/login" data-method="post" style="padding: 5px;">Sign out</a>                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
               <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
            </ul>
        </div>
    </nav>
</header>


<script>
function shadowlogin(){
	if($("#shadow_login_id").val()==1){
		url="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/companies";
		 window.open(url, '_blank');
	}else{
		alert("Please select client");
	}
}
</script>