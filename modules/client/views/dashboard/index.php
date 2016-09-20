<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\UploadfileForm;
use app\models\TblAcaCompanyUsers;
use app\models\TblAcaClients;
use app\models\TblAcaCompanies;
use app\models\TblAcaCompanyUserPermission;
use app\models\TblAcaVideoLinks;

?>
<script type="text/javascript">
$(function() {
	$( "#dashboard-menu-id" ).addClass( "active" );
}); 
</script>

<?php  $baseurl=Yii::$app->getUrlManager()->getBaseUrl(true);?>
<link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/client/dashboard.css" rel="stylesheet">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<div class="box box-warning container-fluid">

	<div class="box-header with-border padding-left-0 padding-right-0">
		<h3 class="box-title col-xs-6 padding-left-0">
			<?php echo $model_companies_year->company_name; ?> <small>(<?php echo $model_companies_year->company_client_number; ?>)</small>
		</h3>
		<div class="col-xs-6 pull-right padding-right-0">
			<span class="col-xs-7 pull-right padding-right-0 help-call"><b>Need help? Call
					<?php echo $model_companies_year->client->brand->support_number;?></b></span>

		</div>
	</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band lighter"></i></span>
		<p class="sub-header-new">You can see the statistics of company from
			this screen.</p>
	</div>

	<div class="row mtop21">
		<div class="col-md-3 col-sm-6 col-xs-12 padding-right-0">
			<div class="info-box" title="Current ACA Reporting Year">
				<span class="info-box-icon "><i class="fa fa-calendar-check-o"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Current ACA Reporting Year</span> <span
						class="info-box-number"><?php echo $model_companies_year->tbl_aca_company_reporting_period->year->lookup_value;?> </span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- ./col -->
		<div class="col-md-3 col-sm-6 col-xs-12 padding-right-0">
			<div class="info-box" title="Reporting Package Purchased">
				<span class="info-box-icon "><i class="fa  fa-user"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Reporting Package Purchased</span> <span
						class="info-box-number"><?php echo $model_companies_year->client->package->lookup_value;?></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- ./col -->
		<div class="col-md-3 col-sm-6 col-xs-12 padding-right-0">
			<div class="info-box"  title="Deadline to Provide Employees 1095">
				<span class="info-box-icon "><i class="fa fa-file-o"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Deadline to Provide Employees 1095</span>
					<span class="info-box-number">14 Days</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- ./col -->
		<div class="col-md-3 col-sm-6 col-xs-12 ">
			<div class="info-box"  title="Deadline to E-File with IRS">
				<span class="info-box-icon "><i class="ion-flash fa-rotate-45 "></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Deadline to E-File with IRS</span> <span
						class="info-box-number">74 Days</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- ./col -->
	</div>

	<div class="col-md-12 padding-left-0 padding-right-0">
		<div class="col-md-8 padding-left-0">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title project-stage">Project
						Stage</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					<!--	<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>-->
					</div>
				</div>
				<div class="box-body">


					<div class="table-responsive">
						<table class="table no-margin">
							<thead>
								<tr>
									<th>Item</th>
									<th>Status</th>
									<th>Date of Completion</th>
									<th style="width: 32%;">Progress Bar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Sign BAA</td>
									<td><span class="label label-success">Completed</span></td>

									<td>10/01/16</td>
									<td><div class="progress sm">
											<div class="progress-bar progress-bar-green"
												style="width: 100%"></div>
										</div></td>
								</tr>
								<tr>
									<td>Schedule Discovery Session</td>
									<td><span class="label label-success">Completed</span></td>
									<td>10/02/16</td>
									<td><div class="progress sm">
											<div class="progress-bar progress-bar-green"
												style="width: 100%"></div>
										</div></td>
								</tr>
								<tr>
									<td>Discovery Session with Account Manager</td>
									<td><span class="label label-info">Processing</span></td>

									<td>10/04/16</td>
									<td><div class="progress sm">
											<div class="progress-bar progress-bar-aqua"
												style="width: 30%"></div>
										</div></td>
								</tr>
								<tr>
									<td>Upload Payroll Data</td>
									<td><span class="label label-warning">Pending</span></td>
									<td>10/05/16</td>
									<td></td>
								</tr>
								<tr>
									<td>Upload Medical Enrollment Data</td>
									<td><span class="label label-warning">Pending</span></td>

									<td>10/05/16</td>
								</tr>
								<tr>
									<td>Data Validation</td>
									<td><span class="label label-warning">Pending</span></td>


									<td>10/10/16</td>
									<td></td>
								</tr>
								<tr>
									<td>General 1095 Forms</td>
									<td><span class="label label-warning">Pending</span></td>

									<td>01/16/17</td>
									<td></td>
								</tr>
								<tr>
									<td>Approve 1095 Forms</td>
									<td><span class="label label-warning">Pending</span></td>

									<td>01/16/17</td>
									<td></td>
								</tr>
								<tr>
									<td>Approve for e-File</td>
									<td><span class="label label-warning">Pending</span></td>

									<td>01/16/17</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>



				</div>


			</div>


		</div>

		<div class="col-md-4 padding-left-0">

			<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title project-stage">Full
						Service Support</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<!--<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>-->
					</div>
				</div>

				
				<div class="box-body">
				<?php	if(!empty($model_companies_year->client->staffusers->first_name)){ ?>
					<div class="col-xs-4 padding-left-0 padding-right-0">
					
					<?php	if(!empty($model_companies_year->client->staffusers->profile_pic)){ ?>
						<img class="img-responsive img-circle img_height_width"
							src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/profile_image/<?php  echo $model_companies_year->client->staffusers->profile_pic;?>">
					<?php }else{?>
					<img class="img-responsive img-circle img_height_width"
							src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/profile_image/report_1_28146_default.png">
				
					<?php }?>
					</div>
				
					<div class="col-xs-8 padding-left-0 padding-right-0">
						<div style="padding: 21px;">
							<b><?php echo $model_companies_year->client->staffusers->first_name .' '.$model_companies_year->client->staffusers->last_name;?></b></br> <i>Senior Account Manager</i></br>
							<?php echo $model_companies_year->client->staffusers->phone;?>
						</div>
					</div>
					<?php }?>
<!--<div class="col-lg-12 padding-left-0 padding-right-0 col-md-hidden" style=" height: 98px;">

</div>-->

					<div class="col-xs-12 padding-left-0 padding-right-0">

						<div class="col-xs-12 padding-left-0 padding-right-0 mtoppading">
							<div class="col-xs-6 padding-left-0">
								<b>Client Support Hotline:</b>
							</div>

							<div class="col-xs-6 padding-left-0 padding-right-0 ">
								<span class="pull-right"><?php echo $model_companies_year->client->brand->support_number;?></span>
							</div>
						</div>
						<div class="col-xs-12 padding-left-0 padding-right-0"
							style="padding: 10px;">
							<div class="col-xs-6 padding-left-0">
								<b>Client Support Email:</b>
							</div>

							<div class="col-xs-6 padding-left-0 padding-right-0 ">
								<span class="pull-right"><?php echo $model_companies_year->client->brand->support_email;?></span>
							</div>
						</div>
						<?php if($signdocumentpermission) { ?>
						
						<div class="col-xs-12 padding-left-0 padding-right-0 mtoppading">
							<div class="info-box  info-box1 bg-aqua" style="margin-bottom: 0px;">
								<span class="info-box-icon info-box-icon1"><i
									class="glyphicon glyphicon-pencil"></i></span>

								<div class="info-box-content info-box-content1">
									<span class="info-box-text">Sign Client Agreements</span>
									
									<?php if($right_sign_permission == TRUE){ 
											if(!empty($right_sign_docs)){ ?> 									
											<span class="progress-description" title="Please click the button to view the signed document."> Please click the button to
												view the signed document. </span>
											<a href="<?php echo $right_sign_docs->signed_doc_url;?>" target="_blank"><button style="color:black;">View</button></a>
											<?php } else{ ?>
											<span class="progress-description" title="Please click the button to securely sign our client agreement document."> Please click the button to
												securely sign our client agreement document. </span>
											<a href="https://rightsignature.com/forms/IdeaPaymentReceip-65c286/token/5aaf502367c" target="_blank"><button style="color:black;">Continue</button></a>
									<?php } } else{
												if(!empty($session['is_client']) &&  $session['is_client'] == 'companyuser'){?>
													<span style="font-size: 13px;"> the BAA is not signed yet. Please contact <?php echo $users_list;?> </span>
									<?php } else{ ?>
										<span class="progress-description" title="Please click the button to securely sign our client agreement document."> Please click the button to
											securely sign our client agreement document. </span>
										<button style="color:black;cursor: not-allowed;" disabled>Continue</button>
										
									<?php } }?>
								</div>

							</div>


							<!-- /.info-box-content -->
						</div>
						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="col-xs-12 padding-left-0 padding-right-0">
	
	<?php if($document_upload_permission === TRUE) { ?>
	<div class="col-md-4  padding-right-0">
	<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 18px !important;">Upload Secure Documents</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<!--<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>-->
					</div>
				</div>
				<?php $model_upload_form = new UploadfileForm(); ?>
				<div class="box-body">
					<?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data','id' => 'upload-to-sharefile-form','method' => 'POST', 'enableClientValidation' => false],'action'=>'/client/dashboard/uploaddocuments?c_id='.Yii::$app->request->get ( 'c_id' ),]); ?>
					<div class="form-group">
						<div class="">
							<label class="control-label"><h4>Choose document to upload securely</h4></label>
							<?=$form->field ( $model_upload_form, 'Document' )->fileInput ( [ 'class' => 'form-control form-height' ] )->label ( false )?>
    		
						</div>
					</div>
					<div class="form-group" style="margin-bottom:10px;">
						<div class="">
							<div class=" ">
								<?= Html::submitButton('Submit',  ['class'=> 'btn btn-primary btn-sm','onclick'=>'uploadsecuredocs();']) ;?>
							</div>
						</div>
					</div>
					<?php  ActiveForm::end(); ?>
				</div>
	 
	</div>
	</div>
	<?php } if($document_download_permission === TRUE) { ?>
	<div class="col-md-4  padding-right-0">
	<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 18px !important;">Download Secure Documents</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<!--<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>-->
					</div>
				</div>
				<div class="box-body">
				
				
					<h5><u>Securely download documents including:</u></h5>
					
					<ul class="box_ul" style="list-style: none;
    padding: 0px;">
					  <li>Completed 1095 forms</li>
					  <li>Completed 1094 forms</li>
					  <li>Change request documents</li>
					  <li>IRS Acknowledgements</li>
					</ul>
					<div class="form-group" style="margin-bottom:10px;">
				<div class="">
				<div class=" ">
				<button type="submit" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#download-documents" onclick="deleteDownloadedFiles('<?php echo Yii::$app->request->get('c_id'); ?>');" >Continue to secure area</button>
					
				</div>
				</div>
				</div>
	</div>
	</div>
	</div>
	<?php } ?>
	
	
	
	<div class="col-md-4 ">
	<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 18px !important;">Video</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					<!--	<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>-->
					</div>
				</div>
				<div class="box-body">
	 <iframe width="100%" src="<?php $model_videos=TblAcaVideoLinks::dashboardurl(10); echo $model_videos; ?>" frameborder="0" allowfullscreen></iframe></div>
  	</div>
	</div>
	</div>

</div>


<!-- Modal -->
<div id="download-documents" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Available Documents</h4>
      </div>
      <div class="modal-body" style="float:left;width:100%;">
	  <?php if(!empty($folder_children)){foreach($folder_children as $files){ ?>
        <div class="col-xs-12" style="padding:0;margin-bottom:10px;">
			<div class="col-xs-1" style="padding:0;"><input type="checkbox" class="checked_files" id="<?php echo $files->Id; ?>" value="<?php echo $files->FileName; ?>"/></div>
			<div class="col-xs-10" style="padding:0;"><label><?php echo $files->FileName; ?></label></div>
		</div>
	  <?php }}
	  else{?>
		<div class="col-xs-12" style="padding:0;margin-bottom:10px;">
			<label>There are no secure documents available to download.</label>
		</div>
	  <?php } ?>
      </div>
      <div class="modal-footer">
	    <?php if(!empty($folder_children)){ ?>
			<button type="button" class="btn btn-primary"  onclick="downloadSelectedDocuments('<?php echo Yii::$app->request->get('c_id'); ?>');">Download</button>
		<?php } ?>
      </div>
    </div>

  </div>
</div>

<div class="load-gif" id="loadGif" style="display:none;">
	<div class="procressing_plz_wait">Processing please wait ....
		<img class="gif-img-prop" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/Images/j-max-loader.gif" /> 
	</div>
</div>
<script>
function uploadsecuredocs(){
	if(document.getElementById('uploadfileform-document').value!=''){
		$("#loadGif").show();
	}
}
</script> 