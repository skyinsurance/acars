<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
    //	print_r($this); die();
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
		<link rel="shortcut icon" type="image/png" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/favicon.png" >
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
      
    </head>
    <body class=" sidebar-mini skin-blue fixed">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <?php $this->endBody() ?>
	
	
  <link
 href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"
 rel="stylesheet">
 
<script type="text/javascript"
 src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	
<!-- jQuery 2.1.4 -->


    </body>
    
    
    <!-- ---------- change password modal --------------- -->

<div class="modal fade" id="myModal-change-pswd" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">Change Password</h4>
			</div>
			<div class="modal-body" style="float: left;">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Email:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control add-member-input"
						readonly="readonly"
						value="johnsmith@aca.com" />
<label class="error-msg" id="current-password-error"></label>
				</div>
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Current Password:</label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input"
						placeholder="Current Password.." id="current-password" /> <label
						class="error-msg" id="current-password-error"></label>
				</div>
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">New Password:</label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input"
						placeholder="New Password.." id="new-password" /> <label
						class="error-msg" id="new-password-error"></label>
				</div>
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Confirm Password:</label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input"
						placeholder="Confirm Password.." id="new-confirm-password" /> <label
						class="error-msg" id="confirm-password-error"></label> <label
						class="error-msg" id="display-password-error"></label>
				</div>
			</div>
			<div class="modal-footer" style="border-top: none;">
			<button type="button" class="btn btn-primary" id="chng_pwd_btn"
					>Save
					Changes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="clearChangePasswordFields();">Close</button>
				


			</div>
		</div>
	</div>
</div>

    </html>
    <?php $this->endPage() ?>
<?php } ?>
