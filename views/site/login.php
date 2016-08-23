<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
     <?php if(Yii::$app->session->hasFlash('custom')): ?>
        <div class="alert alert-danger" role="alert">
            <?= Yii::$app->session->getFlash('custom') ?>
        </div>
    <?php endif; ?>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4 box" style="background-color: white;box-shadow: 0 1px 3px 0 #bfbfbf;border-radius:6px;">
  

    <div class="">
        <div class="col-xs-12">
	<!-- BEGIN LOGIN FORM -->
	  <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'login-form'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
<h4 class="" style="margin:25px 0 15px 0; font-weight:bold; text-align:left;">Log In To Your Account</h4>
	<!-- BEGIN LOGIN FORM -->
	<form action="" class="login-form" method="post"
		novalidate="novalidate">
		
		<div class="form-group" style="margin-bottom:0px;">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

			<div class="input-icon">
				<input type="text" class="form-control  placeholder-no-fix" name="username" placeholder="Username">
				

			</div>
		</div>
		<div class="form-group" >

			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input type="password" class="form-control  placeholder-no-fix" name="password" placeholder="Password">
				


			</div>
		</div>
		<div class="form-actions">
			<div class="forget-password">
				<h4 class="pswd-lbl" style="color: #000;">Forgot your password ?</h4>
				<p style="color: #000;">
					<a id="forget-password" href="#" data-toggle="modal" data-target="#mychangepassword">Click here</a> to reset
					your password.
				</p>
			</div>
			 <?= Html::submitButton('Login', ['class' => 'btn btn-primary blue col-xs-6', 'name' => 'login-button','style'=>'width: 100px; margin-bottom: 5%;']) ?>
			

		</div>
		
		


	</form>

	<!-- END LOGIN FORM -->

	 <?php ActiveForm::end(); ?>
          
        </div>
		</div>
		
    </div>
  </div>
</div>



 

