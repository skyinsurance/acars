<?php 
use app\models\TblAcaCompanyUserPermission;
use app\components\EncryptDecryptComponent;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\TblAcaLookupOptions;
use yii\widgets\ActiveForm;
$get_id = Yii::$app->request->get();
$company_id = $get_id['c_id'];
$plan_id =  $get_id['plan_id'];
		?>
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/client/planclass.js"></script>
<link rel="stylesheet" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/client/planclass.css">

<div class="box box-warning container-fluid">
	<div class="box-header with-border ">
		<h3 class="box-title col-xs-6">
			Update <?php echo $model_plan_coverage_type->plan_class_number; ?> - <?php echo $company_details->company_name; ?> <small> (<?php echo $company_details->company_client_number; ?>) </small>
		</h3>
		<div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right" onclick="playVideo(4);"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
	</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">Below is the form to add plan class.</p>
	</div>
	<div class="col-md-12 ">



		<div class="">
			<div class="">
				<div class="box box-solid">

					<!-- /.box-header -->
					<div class="box-body">
						<div class="box-group" id="accordion">
							<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
							<div class="panel  box ">
								<div class="parent-tabs box-header with-border"
									>

									<span id="step_coverage" class="steps col-xs-2 " onclick="editbasic();">
										<span class="check " > <i
											class="fa fa-check" aria-hidden="true"></i> <span class="">9</span>
									</span> <span  style="display: none;" class="edit" >Edit</span>
									</span>

									<h4 class="box-title col-sm-6 col-xs-12">
										<div id="step_coverage_number_div"class="fixed-number col-sm-1 col-xs-2  " style="top: 3px;">
											<span class="block-number">9</span>
										</div>
										<a class="custom-bg col-sm-11 col-xs-10 white"
											data-parent="#accordion"
											style="padding-left: 0;"> Coverage Type and
											Waiting Period </a>
									</h4>

									<div class="box-title col-xs-3 pull-right"
										style="padding-top: 7px;">
										<p class="custom-bg summary-text pull-right"
											style="font-size: 12px; color: white;"></p>
									</div>

								</div>
								<div id="collapseOne"
									class="panel-collapse collapse  bg-white black">
									<div class="box-body">
										<p class="highlight-fancy">
											<span class="status"><i class="fa fa-info-circle"
												aria-hidden="true"></i></span> Fill the information about
											your Plan Class

										</p>
										<div class="col-md-12 padding-right-0">
											<div class="">
											<?php $form = ActiveForm::begin(['enableClientValidation' => true,'options' => ['enctype'=>'multipart/form-data','validateOnSubmit' => true,'class'=>'form-horizontal','id'=>'coverage-type']]); ?>
												
												<div class="">

													<div class=" box-info">

														<!-- /.box-header -->
														<!-- form start -->
														
															<div class="col-md-offset-1 col-md-10">
																<div class="col-xs-12">
																	<div class="form-group ">
																		<div class="col-md-5">
																			<label class="control-label"><h4>
																					<?php echo $model_element_master->FindelementbyelementId('9.1')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('9.1')->element_label; ?></h4> </label>
																		</div>
																		<div class="col-md-7">
																			<input type="text" class="form-control form-height"
																				id="" placeholder="" value="<?php echo $model_plan_coverage_type->plan_class_number; ?>"
																				readonly disabled>

																		</div>
																	</div>


																	<div class="form-group ">
																		<div class="col-md-5">
																			<label class="control-label"><h4>
																					<?php echo $model_element_master->FindelementbyelementId('9.2')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('9.2')->element_label; ?></h4> </label>
																		</div>
																		<div class="col-md-7">
																		 <?=$form->field ( $model_plan_coverage_type, 'plan_class_name' )->textInput ( [ 'class' => 'form-control form-height','maxlength'=>'34','onkeypress'=>'return alpha(event);'  ] )->label ( false )?>
    		
																			<span id="plan_class_name_error" class="red"></span>
																		</div>
																	</div>

																	<div class="form-group row plan-div-margin">
																		<div class="col-md-5">
																			<label class="control-label"><h4>
																					<?php echo $model_element_master->FindelementbyelementId('9.3')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('9.3')->element_label; ?></h4> </label>
																		</div>
																		<div class="col-md-3">
																			<div class="row">
																				<input type="radio" name="TblAcaPlanCoverageType[plantype]" value="1" 
																				
																				<?php if($model_plan_coverage_type->plan_offer_type == 1){
																			
																					?> 
																				checked
																				<?php  } ?>
																				 ><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No
																					Qualifying Plan Offered </span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>
																			<div class="row">
																				<input type="radio" name="TblAcaPlanCoverageType[plantype]" value="2"
																				<?php if($model_plan_coverage_type->plan_offer_type == 2){
																					?> 
																				checked
																				<?php } ?>
																				><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Self
																					Insured </span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>


																		</div>

																		<div class="col-md-4">
																			<div class="row">
																				<input type="radio" name="TblAcaPlanCoverageType[plantype]" value="3"
																				<?php if($model_plan_coverage_type->plan_offer_type == 3){
																					?> 
																				checked
																				<?php } ?>
																				><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Fully
																					Insured </span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>
																			<div class="row">
																				<input type="radio" name="TblAcaPlanCoverageType[plantype]" value="4"
																				<?php if($model_plan_coverage_type->plan_offer_type == 4){
																					?> 
																				checked
																				<?php } ?>
																				>
																				<span class="control-checkbox">&nbsp;&nbsp;&nbsp;Multi
																					Employer Plan </span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>

																		</div>
																		<div class="col-md-6"></div>
																		<div class="col-md-6">
																			<div class="row">
																				<input type="radio" name="TblAcaPlanCoverageType[plantype]" value="5"
																				<?php if($model_plan_coverage_type->plan_offer_type == 5){
																					?> 
																				checked
																				<?php } ?>
																				><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Combination
																					of the options above during the year</span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>
																		</div>
																	</div>

																	<div class="" id="combination_div1" <?php if($model_plan_coverage_type->plan_offer_type == 5){ ?> style="display: block;" <?php }else{ ?>style="display: none;" <?php }?>>
																		<?php  $coveragetype= ArrayHelper::map(TblAcaLookupOptions::find()->where(['=', 'code_id', 8])->andwhere(['<>', 'lookup_status', 2])->all(), 'lookup_id', 'lookup_value');?>
																		<div class="col-xs-12" style="border: 1px solid #ddd;">
																			<div class="col-sm-4 padding-left-0">
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">January</div>
																					<div class="col-sm-9">
																					<?php $jan_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','1');?>
																							
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][1]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>"  <?php if(!empty($jan_1) && $jan_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>

																				  <div class="row plan-div-margin">
																					<div class="col-sm-3">January</div>
																					<div class="col-sm-9">
																					
																					<?php $jan_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','1');?>
																					
																						<?php  $waitingperiod= ArrayHelper::map(TblAcaLookupOptions::find()->where(['=', 'code_id', 9])->andwhere(['<>', 'lookup_status', 2])->all(), 'lookup_id', 'lookup_value');?>	
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][1]">
																							<option value="">Select waiting Period</option>
																							<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>"  <?php if(!empty($jan_3) && $jan_3 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>
																				
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">April</div>
																					<div class="col-sm-9">
																					<?php $apr_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','4');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][4]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>"  <?php if(!empty($apr_1) && $apr_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>

																				<div class="row plan-div-margin">
																							<div class="col-sm-3">April</div>
																							<div class="col-sm-9">
																							<?php $apr_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','4');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][4]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($apr_3) && $apr_3 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">July</div>
																					<div class="col-sm-9">
																					<?php $jul_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','7');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][7]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>"  <?php if(!empty($jul_1) && $jul_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>

																				<div class="row plan-div-margin">
																							<div class="col-sm-3">July</div>
																							<div class="col-sm-9">
																							<?php $jul_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','7');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][7]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>"  <?php if(!empty($jul_3) && $jul_3 == $key) {?> selected<?php }?> ><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">October</div>
																					<div class="col-sm-9">
																					<?php $oct_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','10');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][10]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($oct_1) && $oct_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>
																				
																				<div class="row plan-div-margin">
																							<div class="col-sm-3">October</div>
																							<div class="col-sm-9">
																							<?php $oct_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','10');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][10]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($oct_3) && $oct_3 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																			</div>
																			<div class="col-md-4 padding-left-0">

																				<div class="row plan-div-margin">
																					<div class="col-sm-3">February</div>
																					<div class="col-sm-9">
																					<?php $feb_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','2');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][2]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($feb_1) && $feb_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>
																				
																				<div class="row plan-div-margin">
																							<div class="col-sm-3">February</div>
																							<div class="col-sm-9">
																							<?php $feb_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','2');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][2]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($feb_3) && $feb_3 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">May</div>
																					<div class="col-sm-9">
																					<?php $may_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','5');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][5]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($may_1) && $may_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>
																				
																				<div class="row plan-div-margin">
																							<div class="col-sm-3">May</div>
																							<div class="col-sm-9">
																							<?php $may_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','5');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][5]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($may_3) && $may_3 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">August</div>
																					<div class="col-sm-9">
																					<?php $aug_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','8');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][8]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($aug_1) && $aug_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>
																				
																				<div class="row plan-div-margin">
																							<div class="col-sm-3">August</div>
																							<div class="col-sm-9">
																							<?php $aug_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','8');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][8]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($aug_3) && $aug_3 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">November</div>
																					<div class="col-sm-9">
																					<?php $nov_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','11');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][11]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($nov_1) && $nov_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>
																				
																				<div class="row plan-div-margin">
																							<div class="col-sm-3">November</div>
																							<div class="col-sm-9">
																							<?php $nov_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','11');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][11]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($nov_3) && $nov_3 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						
																			</div>
																			<div class="col-md-4 padding-left-0 padding-right-0">

																				<div class="row plan-div-margin">
																					<div class="col-sm-3">March</div>
																					<div class="col-sm-9">
																					<?php $mar_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','3');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][3]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($mar_1) && $mar_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>

																				<div class="row plan-div-margin">
																							<div class="col-sm-3">March</div>
																							<div class="col-sm-9">
																							<?php $mar_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','3');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][3]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($mar_3) && $mar_3 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">June</div>
																					<div class="col-sm-9">
																					<?php $jun_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','6');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][6]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($jun_1) && $jun_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>

																				<div class="row plan-div-margin">
																							<div class="col-sm-3">June</div>
																							<div class="col-sm-9">
																							<?php $jun_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','6');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][6]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($jun_3) && $jun_3 == $key){?> selected<?php }?> ><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">September</div>
																					<div class="col-sm-9">
																					<?php $sept_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','9');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][9]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($sept_1) && $sept_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>

																				<div class="row plan-div-margin">
																							<div class="col-sm-3">September</div>
																							<div class="col-sm-9">
																							<?php $sep_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','9');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][9]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($sep_3) && $sep_3 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																				<div class="row plan-div-margin">
																					<div class="col-sm-3">December</div>
																					<div class="col-sm-9">
																					<?php $dec_1 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'1','12');?>
																					
																						<select class="form-control reset-coverage-type" name="Planoffertypeyears[1][12]">
																							<option value="">Select Coverage Type</option>
																							<?php if(!empty($coveragetype))
																							{ 
																							foreach ($coveragetype as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($dec_1) && $dec_1 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>
																						</select>
																					</div>
																				</div>
																				
																					<div class="row plan-div-margin">
																							<div class="col-sm-3">December</div>
																							<div class="col-md-9">
																							<?php $dec_3 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'3','12');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[3][12]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($dec_3) && $dec_3 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						
																			</div>
																		</div>
																	</div>




																	<div class="" id="combination_div2" <?php if($model_plan_coverage_type->plan_offer_type == 2 || $model_plan_coverage_type->plan_offer_type == 3 || $model_plan_coverage_type->plan_offer_type == 4 ){ ?> style="display:block; "<?php }else{ ?>style="display:none; "<?php }?>>
																		<div class="col-md-12" style="border: 1px solid #ddd;">
																			<div class="form-group plan-div-margin">
																				
																				<div class="col-md-6">
																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio" 
																						
																				<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 1){
																			
																					?> 
																				checked
																				<?php  } ?>
																				
																							value="1" ><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Date
																							of hire (DOH)</span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>
																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio"
																						<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 2){
																					?> 
																				checked
																				<?php } ?>
																							value="2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;30
																							Days after DOH </span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>
																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio"
																						<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 3){
																					?> 
																				checked
																				<?php } ?>
																							value="3"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;60
																							Days after DOH </span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>
																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio"
																						<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 4){
																					?> 
																				checked
																				<?php } ?>
																							value="4"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;90
																							Days after DOH </span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>

																				</div>

																				<div class="col-md-6">
																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio"
																						<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 5){
																					?> 
																				checked
																				<?php } ?>
																							value="5"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st
																							of Month after DOH</span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>
																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio"
																						<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 6){
																					?> 
																				checked
																				<?php } ?>
																							value="6"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st
																							of Month after 30 days after DOH</span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>

																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio"
																						<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 7){
																					?> 
																				checked
																				<?php } ?>
																							value="7"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st
																							of Month after 60 days after DOH</span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>

																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio"
																						<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 8){
																					?> 
																				checked
																				<?php } ?>
																							value="8"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st
																							of Month after 90 days after DOH</span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>
																					
																					<div class="">
																						<input type="radio" name="TblAcaPlanCoverageType[doh]" class="reset-coverage-type-radio"
																						<?php if(isset($model_plan_coverage_type->plan_type_doh) && $model_plan_coverage_type->plan_type_doh == 9){
																					?> 
																				checked
																				<?php } ?>
																							value="9"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Combination
																							of the options above during the year</span>&nbsp;&nbsp;&nbsp;&nbsp;
																					</div>
																				</div>
																				
																			</div>

																			<div class="" id="combination_div3" <?php if($model_plan_coverage_type->plan_type_doh == 9 ){ ?> style="display:block; "<?php }else{ ?>style="display:none; "<?php }?>>
																				<div class="col-xs-12"
																					style="border: 1px solid #ddd; margin-bottom: 15px;">
																					<div class="col-md-4 padding-left-0">
																					<?php  $waitingperiod= ArrayHelper::map(TblAcaLookupOptions::find()->where(['=', 'code_id', 9])->andwhere(['<>', 'lookup_status', 2])->all(), 'lookup_id', 'lookup_value');?>
																		
																						<div class="row plan-div-margin">
																							<div class="col-sm-3">January</div>
																							<div class="col-sm-9">
																							<?php $jan_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','1');?>
																									
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][1]">
																									<option value="" >Select Waiting Period</option>
																									<?php 
																									
																									if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($jan_2) && $jan_2 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>

																						<div class="row plan-div-margin">
																							<div class="col-sm-3">April</div>
																							<div class="col-sm-9">
																							<?php $apr_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','4');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][4]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($apr_2) && $apr_2 == $key) {?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>

																						<div class="row plan-div-margin">
																							<div class="col-sm-3">July</div>
																							<div class="col-sm-9">
																							<?php $jul_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','7');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][7]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>"  <?php if(!empty($jul_2) && $jul_2 == $key) {?> selected<?php }?> ><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>

																						<div class="row plan-div-margin">
																							<div class="col-sm-3">October</div>
																							<div class="col-sm-9">
																							<?php $oct_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','10');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][10]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($oct_2) && $oct_2 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-4 padding-left-0">

																						<div class="row plan-div-margin">
																							<div class="col-sm-3">February</div>
																							<div class="col-sm-9">
																							<?php $feb_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','2');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][2]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($feb_2) && $feb_2 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						<div class="row plan-div-margin">
																							<div class="col-sm-3">May</div>
																							<div class="col-sm-9">
																							<?php $may_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','5');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][5]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($may_2) && $may_2 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						<div class="row plan-div-margin">
																							<div class="col-sm-3">August</div>
																							<div class="col-sm-9">
																							<?php $aug_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','8');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][8]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($aug_2) && $aug_2 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																						<div class="row plan-div-margin">
																							<div class="col-sm-3">November</div>
																							<div class="col-sm-9">
																							<?php $nov_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','11');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][11]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($nov_2) && $nov_2 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																					</div>
																					<div class="col-md-4 padding-left-0 padding-right-0">

																						<div class="row plan-div-margin">
																							<div class="col-sm-3">March</div>
																							<div class="col-sm-9">
																							<?php $mar_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','3');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][3]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($mar_2) && $mar_2 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>

																						<div class="row plan-div-margin">
																							<div class="col-sm-3">June</div>
																							<div class="col-sm-9">
																							<?php $jun_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','6');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][6]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($jun_2) && $jun_2 == $key){?> selected<?php }?> ><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>

																						<div class="row plan-div-margin">
																							<div class="col-sm-3">September</div>
																							<div class="col-sm-9">
																							<?php $sep_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','9');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][9]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($sep_2) && $sep_2 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>

																						<div class="row plan-div-margin">
																							<div class="col-sm-3">December</div>
																							<div class="col-md-9">
																							<?php $dec_2 = $model_plan_offer_type_years->getPlanoffermonthvalue($model_plan_coverage_type->plan_class_id,'2','12');?>
																							
																								<select class="form-control reset-coverage-type" name="Planoffertypeyears[2][12]">
																									<option value="" >Select Waiting Period</option>
																									<?php if(!empty($waitingperiod))
																							{ 
																							foreach ($waitingperiod as $key=>$value){?>
																							<option value="<?php echo $key; ?>" <?php if(!empty($dec_2) && $dec_2 == $key){?> selected<?php }?>><?php echo $value; ?></option>
																							<?php }} ?>

																								</select>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>




																		</div>

																	</div>

																	<div class="form-group row plan-div-margin">
																		<div class="col-md-8">
																			<label class="control-label"><h4><?php echo $model_element_master->FindelementbyelementId('9.4')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('9.4')->element_label; ?></h4> </label>
																		</div>
																		<div class="col-md-4" style="margin-top: 10px;">
																			<input type="radio"  name="TblAcaPlanCoverageType[employeemedicalplan]" 
																				<?php if(isset($model_plan_coverage_type->employee_medical_plan) && $model_plan_coverage_type->employee_medical_plan == 1){
																			
																					?> 
																				checked
																				<?php  } ?> value="1"><span
																				class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
																			<input type="radio" name="TblAcaPlanCoverageType[employeemedicalplan]" value="2"
																			<?php if(isset($model_plan_coverage_type->employee_medical_plan) &&$model_plan_coverage_type->employee_medical_plan == 2){
																			
																					?> 
																				checked
																				<?php  } ?> 
																			><span
																				class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span>


																		</div>
																	</div>




																</div>



															</div>
													
													</div>
													<!-- /.box-body -->

													<!-- /.box-footer -->
													
													<div class="box-footer pull-right padding-right-0">
														<a class="btn btn-default btn-default-cancel"
															href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/planclass?c_id=<?php echo $company_id;?> ">Cancel</a>
														<?= Html::submitButton('Save and Exit' , ['class' =>   'btn btn-success coverage-type-btn' ,'name' => 'button','value'=>'exit'])?>
    	
													<?= Html::submitButton('Save and Continue' , ['class' =>   'btn btn-success coverage-type-btn' ,'name' => 'button','value'=>'continue'])?>
    	
															
														
													</div>
													
													
												</div>
							<?php ActiveForm::end(); ?>
											</div>
										</div>


									</div>
								</div>




							</div>

							<div class="panel box ">
								<div class="parent-tabs box-header with-border">
									<span id="step1" class="steps col-xs-2 no-wrap"
										onclick="editbasic1()"> <span class="check "
										style="display: none;"> <i class="fa fa-check"
											aria-hidden="true"></i> <span class="">10</span>
									</span> <span style="display: none;" class="edit">Edit</span></span>

									<h4 class="box-title col-sm-6 col-xs-12">
										<div class="fixed-number col-sm-1 col-xs-2" style="top: 3px;">
											<span class="block-number">10</span>
										</div>
										<a class="custom-bg col-sm-11 col-xs-10"
											data-parent="#accordion" style="padding-left: 0;">Type of
											Coverage Offered </a>
									</h4>

									<div class="box-title col-xs-3 pull-right"
										style="padding-top: 7px;">
										<p class="custom-bg summary-text pull-right"
											style="font-size: 12px;"></p>
									</div>

								</div>
								<div id="collapseTwo"
									class="panel-collapse collapse bg-white black">
									<div class="box-body padding-right-0">
									<?php $form = ActiveForm::begin(['action' => ['/client/planclass/coveragetypeoffered?c_id='.$company_id.'&plan_id='.$plan_id],'enableClientValidation' => false,'options' => ['method' => 'post','enctype'=>'multipart/form-data','validateOnSubmit' => true,'class'=>'','id'=>'coverage-type-offerred']]); ?>
											
										<p class="highlight-fancy">
											<span class="status"><i class="fa fa-info-circle"
												aria-hidden="true"></i></span> Specify the type of coverage
											offered

										</p>

										<div class="col-md-offset-1 col-md-10">
											
												<div class="form-group row plan-div-margin">
													<div class="col-md-6">
														<label class="control-label"><h4><?php echo $model_element_master->FindelementbyelementId('10.1')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('10.1')->element_label; ?></h4>
														</label>
													</div>
													<div class="col-md-4" style="margin-top: 10px;">
														<input type="radio" name="TblAcaPlanCoverageTypeOffered[employee_mv_coverage]" value="1" <?php if($model_plan_coverage_type_offered->employee_mv_coverage == 1){
																			
																					?> 
																				checked
																				<?php  } ?>><span
															class="control-checkbox" 
															 
															>&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="TblAcaPlanCoverageTypeOffered[employee_mv_coverage]" value="2" 
																				<?php if($model_plan_coverage_type_offered->employee_mv_coverage == 2){
																			
																					?> 
																				checked
																				<?php  } ?>><span
															class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span>


													</div>
												</div>



												<div class="form-group row years1 plan-div-margin"
													style=" <?php if($model_plan_coverage_type_offered->employee_mv_coverage == 1){
																			
																					?> display: block;<?php }else{ ?> display: none;<?php }?>">
													<div class="col-md-6">
														<label class="control-label"><h4><?php echo $model_element_master->FindelementbyelementId('10.1.1')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('10.1.1')->element_label; ?></h4> </label>
													</div>
													
													<?php 
													if(!empty($model_plan_coverage_type_offered->mv_coverage_months))
													{
														$mv_coverage_months_array = explode(',', $model_plan_coverage_type_offered->mv_coverage_months);
													}
													?>
													<div class="col-sm-3">

														<div class="checkbox">
															<label><input type="checkbox" onclick="disableyear();"
																id="entire_year"  name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][0]" value="0" <?php if(!empty($mv_coverage_months_array) && in_array ( '0', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?> >Entire Year</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year"  name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][1]" value="1" <?php if(!empty($mv_coverage_months_array) && in_array ( '1', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?> >January</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][2]" value="2" <?php if(!empty($mv_coverage_months_array) && in_array ( '2', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>February</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][3]" value="3" <?php if(!empty($mv_coverage_months_array) && in_array ( '3', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>March</label>
														</div>

														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][4]" value="4" <?php if(!empty($mv_coverage_months_array) && in_array ( '4', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>April</label>
														</div>

														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][5]" value="5" <?php if(!empty($mv_coverage_months_array) && in_array ( '5', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>May</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][6]" value="6" <?php if(!empty($mv_coverage_months_array) && in_array ( '6', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>June</label>
														</div>
													</div>

													<div class="col-sm-3">
														<div class="checkbox">
															<label></label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][7]" value="7" <?php if(!empty($mv_coverage_months_array) && in_array ( '7', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>July</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][8]" value="8" <?php if(!empty($mv_coverage_months_array) && in_array ( '8', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>August</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][9]" value="9" <?php if(!empty($mv_coverage_months_array) && in_array ( '9', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>September</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][10]" value="10" <?php if(!empty($mv_coverage_months_array) && in_array ( '10', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>October</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][11]" value="11" <?php if(!empty($mv_coverage_months_array) && in_array ( '11', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>November</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year" name="TblAcaPlanCoverageTypeOffered[mv_coverage_months][12]" value="12" <?php if(!empty($mv_coverage_months_array) && in_array ( '12', $mv_coverage_months_array, TRUE )){ ?>checked <?php }?>>December</label>
														</div>

													</div>
												</div>


												<div class="form-group row plan-div-margin">
													<div class="col-md-6">
														<label class="control-label"><h4>
																<?php echo $model_element_master->FindelementbyelementId('10.2')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('10.2')->element_label; ?>
															</h4> </label>
													</div>
													<div class="col-md-4" style="margin-top: 10px;">
														<input type="radio" name="TblAcaPlanCoverageTypeOffered[employee_essential_coverage]" value="1" 
														<?php if($model_plan_coverage_type_offered->employee_essential_coverage == 1){
																			
																					?> 
																				checked
																				<?php  } ?>
														><span
															class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="TblAcaPlanCoverageTypeOffered[employee_essential_coverage]" value="2"
															
																				<?php if($model_plan_coverage_type_offered->employee_essential_coverage == 2){
																			
																					?> 
																				checked
																				<?php  } ?>><span class="control-checkbox" >&nbsp;&nbsp;&nbsp;&nbsp;No</span>


													</div>
												</div>


												<div class="form-group row years2 plan-div-margin"
													style=" <?php if($model_plan_coverage_type_offered->employee_essential_coverage == 1){
																			
																					?> display: block;<?php }else{ ?> display: none;<?php }?>">
													<div class="col-md-6">
														<label class="control-label"><h4><?php echo $model_element_master->FindelementbyelementId('10.2.1')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('10.2.1')->element_label; ?></h4> </label>
													</div>
													
													<?php 
													if(!empty($model_plan_coverage_type_offered->essential_coverage_months))
													{
														$employee_essential_coverage_array = explode(',', $model_plan_coverage_type_offered->essential_coverage_months);
													}
													?>
													
													<div class="col-sm-3">

														<div class="checkbox">
															<label><input type="checkbox" onclick="disableyear1();"
																id="entire_year1"  name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][0]" value="0" <?php if(!empty($employee_essential_coverage_array) && in_array ( '0', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>Entire Year</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1"  name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][1]" value="1" <?php if(!empty($employee_essential_coverage_array) && in_array ( '1', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>January</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][2]" value="2" <?php if(!empty($employee_essential_coverage_array) && in_array ( '2', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>February</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][3]" value="3" <?php if(!empty($employee_essential_coverage_array) && in_array ( '3', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>March</label>
														</div>

														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][4]" value="4" <?php if(!empty($employee_essential_coverage_array) && in_array ( '4', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>April</label>
														</div>

														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][5]" value="5" <?php if(!empty($employee_essential_coverage_array) && in_array ( '5', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>May</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][6]" value="6" <?php if(!empty($employee_essential_coverage_array) && in_array ( '6', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>June</label>
														</div>
													</div>

													<div class="col-sm-3">
														<div class="checkbox">
															<label></label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][7]" value="7" <?php if(!empty($employee_essential_coverage_array) && in_array ( '7', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>July</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][8]" value="8" <?php if(!empty($employee_essential_coverage_array) && in_array ( '8', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>August</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][9]" value="9" <?php if(!empty($employee_essential_coverage_array) && in_array ( '9', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>September</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][10]" value="10" <?php if(!empty($employee_essential_coverage_array) && in_array ( '10', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>October</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][11]" value="11" <?php if(!empty($employee_essential_coverage_array) && in_array ( '11', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>November</label>
														</div>
														<div class="checkbox">
															<label><input type="checkbox" class="specific_year1" name="TblAcaPlanCoverageTypeOffered[essential_coverage_months][12]" value="12" <?php if(!empty($employee_essential_coverage_array) && in_array ( '12', $employee_essential_coverage_array, TRUE )){ ?>checked <?php }?>>December</label>
														</div>

													</div>
												</div>

												<div class="form-group row plan-div-margin">
													<div class="col-md-6">
														<label class="control-label"><h4><?php echo $model_element_master->FindelementbyelementId('10.3')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('10.3')->element_label; ?>
															</h4> </label>
													</div>
													<div class="col-md-4" style="margin-top: 10px;">
														<input type="radio" name="TblAcaPlanCoverageTypeOffered[spouse_essential_coverage]" value="1" 
																				<?php if($model_plan_coverage_type_offered->spouse_essential_coverage == 1){
																			
																					?> 
																				checked
																				<?php  } ?>><span
															class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="TblAcaPlanCoverageTypeOffered[spouse_essential_coverage]" value="2" <?php if($model_plan_coverage_type_offered->spouse_essential_coverage == 2){
																			
																					?> 
																				checked
																				<?php  } ?>><span
															class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span>


													</div>
												</div>

													<input type="hidden" name="TblAcaPlanCoverageTypeOffered[]">
												<div class="form-group row plan-div-margin hide" id="spouse_conditional_coverage_div">
													<div class="col-md-6">
														<label class="control-label"><h4><?php echo $model_element_master->FindelementbyelementId('10.3.1')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('10.3.1')->element_label; ?></h4></label>
													</div>
													<div class="col-md-4" style="margin-top: 10px;">
														<input type="radio" class="spouse-conditional-coverage-radio" name="TblAcaPlanCoverageTypeOffered[spouse_conditional_coverage]" value="1"
																				<?php if($model_plan_coverage_type_offered->spouse_conditional_coverage == 1){
																			
																					?> 
																				checked
																				<?php  } ?>><span
															class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio"  class="spouse-conditional-coverage-radio" name="TblAcaPlanCoverageTypeOffered[spouse_conditional_coverage]" value="2" <?php if($model_plan_coverage_type_offered->spouse_conditional_coverage == 2){
																			
																					?> 
																				checked
																				<?php  } ?>><span
															class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span>


													</div>
												</div>

												<div class="form-group row plan-div-margin" id="">
													<div class="col-md-6">
														<label class="control-label"><h4>
																<?php echo $model_element_master->FindelementbyelementId('10.4')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('10.4')->element_label; ?>
															</h4> </label>
													</div>
													<div class="col-md-4" style="margin-top: 10px;">
														<input type="radio"  name="TblAcaPlanCoverageTypeOffered[dependent_essential_coverage]" value="1"  
																				<?php if($model_plan_coverage_type_offered->dependent_essential_coverage == 1){
																			
																					?> 
																				checked
																				<?php  } ?>><span
															class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
														<input type="radio" name="TblAcaPlanCoverageTypeOffered[dependent_essential_coverage]" value="2" <?php if($model_plan_coverage_type_offered->dependent_essential_coverage == 2){
																			
																					?> 
																				checked
																				<?php  } ?>><span
															class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span>


													</div>

												</div>
											
										</div>


										<div class=" box-footer pull-right padding-right-0">

											<a class="btn btn-default btn-default-cancel"
												href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/planclass?c_id=<?php echo $company_id;?> ">Cancel</a>
											<?= Html::submitButton('Save and Exit' , ['class' =>   'btn btn-success coverage-type-offerred-btn' ,'name' => 'button','value'=>'exit'])?>
    	
											<?= Html::submitButton('Save and Continue' , ['class' =>   'btn btn-success coverage-type-offerred-btn' ,'name' => 'button','value'=>'continue'])?>
    	
										</div>
				<?php ActiveForm::end(); ?>
									</div>


								</div>

							</div>


							<div class="panel box ">
								<div class="parent-tabs box-header with-border"
									>
									<span id="step1" class="steps col-xs-2 no-wrap" onclick="editbasic2()">
										<span class="check " style="display: none;"> <i
											class="fa fa-check" aria-hidden="true"></i> <span class="">11</span>
									</span> <span style="display: none;" class="edit">Edit</span>
									</span>

									<h4 class="box-title col-sm-6 col-xs-12" style="">
										<div class="fixed-number col-sm-1 col-xs-2" style="top: 3px;">
											<span class="block-number">11</span>
										</div>
										<a class="custom-bg col-sm-11 col-xs-10"
											data-parent="#accordion" style="padding-left: 0;">Employee
											Contributions </a>
									</h4>

									<div class="box-title col-xs-3 pull-right"
										style="padding-top: 7px;">
										<p class="custom-bg summary-text pull-right"
											style="font-size: 12px;"></p>
									</div>

								</div>
								<div id="collapseThree"
									class="panel-collapse collapse bg-white black">
									<div class="box-body padding-right-0">
									
									
									<?php $form = ActiveForm::begin(['action' => ['/client/planclass/empcontribution?c_id='.$company_id.'&plan_id='.$plan_id],'enableClientValidation' => false,'options' => ['method' => 'post','enctype'=>'multipart/form-data','validateOnSubmit' => true,'class'=>'','id'=>'emp-cont']]); ?>
									
										<p class="highlight-fancy">
											<span class="status"><i class="fa fa-info-circle"
												aria-hidden="true"></i></span> Specify your Employee
											Contributions

										</p>

										<div class="col-md-offset-1 col-md-10">
												<div>

													<div class="form-group">
														<div class="col-sm-12">
															<span class="control-label">
																<h4>"Pay or Play" rule require employees to offer
																	coverage that is affordable based upon a percentage of
																	each employee's household income. Employers would
																	rarely know this number, so the IRS allows for
																	assumptions to be made called "safe harbors"</h4>
																<h4><?php echo $model_element_master->FindelementbyelementId('11.1')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('11.1')->element_label; ?></h4>

																<div>
																	<input name="TblAcaEmpContributions[safe_harbor]" id="lock-back-method" <?php if($model_plan_emp_contributions->safe_harbor == 1){
																			
																					?> 
																				checked
																				<?php  } ?>
																		type="radio" value="1">&nbsp;&nbsp;&nbsp;&nbsp; <span
																		class="control-checkbox">Assume W2 earnings is
																		household earnings (W2 safe harbor)</span>
																	&nbsp;&nbsp;&nbsp;&nbsp;
																</div>

																<div>
																	<input name="TblAcaEmpContributions[safe_harbor]" type="radio"  <?php if($model_plan_emp_contributions->safe_harbor == 2){
																			
																					?> 
																				checked
																				<?php  } ?> value="2">&nbsp;&nbsp;&nbsp;&nbsp;
																	<span class="control-checkbox">Assume household
																		earnings meets federal poverty line (federal poverty
																		line safe harbor)</span>
																</div>

																<div>
																	<input name="TblAcaEmpContributions[safe_harbor]" type="radio"   <?php if($model_plan_emp_contributions->safe_harbor == 3){
																			
																					?> 
																				checked
																				<?php  } ?> value="3">&nbsp;&nbsp;&nbsp;&nbsp;
																	<span class="control-checkbox">Use employee's rate of
																		pay to determine household earnings (rate of pay safe
																		harbor)</span>
																</div>

																<div>
																	<input name="TblAcaEmpContributions[safe_harbor]" type="radio"
																	<?php if($model_plan_emp_contributions->safe_harbor == 4){
																			
																					?> 
																				checked
																				<?php  } ?> value="4">&nbsp;&nbsp;&nbsp;&nbsp;
																	<span class="control-checkbox">Do not apply a safe
																		harbor to this plan class</span>
																</div>

															</span>

														</div>
													</div>

													<div class="form-group">
														<div class="col-sm-12">
															<label class="control-label"><h4><?php echo $model_element_master->FindelementbyelementId('11.2')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('11.2')->element_label; ?></h4> 
															
															<input
																type="radio"  name="TblAcaEmpContributions[employee_plan_contribution]" 
																class="" value="1" 
																<?php 
																
																if($model_plan_emp_contributions->employee_plan_contribution == 1){
																			
																					?> 
																				checked
																				<?php  } ?>
																				><span
																class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
																<input type="radio"  name="TblAcaEmpContributions[employee_plan_contribution]"  
																class="" value="2" <?php if($model_plan_emp_contributions->employee_plan_contribution == 2){
																			
																					?> 
																				checked
																				<?php  } ?>><span
																class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span>
															</label>
														</div>
													</div>

													<div class="form-group" id="lowest_cost_div"
														style="<?php if($model_plan_emp_contributions->employee_plan_contribution == 1){?>display: block;<?php }else{ ?>display: none;<?php }?>">
														<div class="col-sm-12">
															<label class="control-label"><h4><?php echo $model_element_master->FindelementbyelementId('11.2.1')->element_id; ?>&nbsp;&nbsp;&nbsp;<?php echo $model_element_master->FindelementbyelementId('11.2.1')->element_label; ?></h4>
																<div class="col-sm-12 padding-left-0">

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>January</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_jan = '';
																			}
																			else 
																			{
																				;
																			$emp_jan = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'1');
																					
																			}
																			?>
																					
																			<input
																				type="text" name="TblAcaEmpContributionsPremium[premium_value][1]"
																				class="form-control form-height price reset-emp-contribution" value="<?php echo $emp_jan; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>February</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_feb = '';
																			}
																			else 
																			{
																			$emp_feb = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'2');
																					
																			}
																			?>
																			<input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][2]" value="<?php echo $emp_feb; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>March</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span>
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_mar = '';
																			}
																			else 
																			{
																			$emp_mar = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'3');
																					
																			}
																			?>
																			 <input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][3]" value="<?php echo $emp_mar; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>April</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_apr = '';
																			}
																			else 
																			{
																			$emp_apr = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'4');
																					
																			}
																			?>
																			<input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][4]" value="<?php echo $emp_apr; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0 ">
																		<span class=""><h4>May</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_may = '';
																			}
																			else 
																			{
																			$emp_may = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'5');
																					
																			}
																			?>
																			<input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][5]" value="<?php echo $emp_may; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>June</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_jun = '';
																			}
																			else 
																			{
																			$emp_jun = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'6');
																					
																			}
																			?>
																			<input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][6]" value="<?php echo $emp_jun; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>July</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_jul = '';
																			}
																			else 
																			{
																			$emp_jul = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'7');
																					
																			}
																			?>
																			<input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][7]" value="<?php echo $emp_jul; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>August</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span>
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_aug = '';
																			}
																			else 
																			{
																			$emp_aug = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'8');
																					
																			}
																			?>
																			 <input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][8]" value="<?php echo $emp_aug; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>September</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span>
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_sep = '';
																			}
																			else 
																			{
																			$emp_sep = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'9');
																					
																			}
																			?>
																			 <input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][9]" value="<?php echo $emp_sep; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>October</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_oct = '';
																			}
																			else 
																			{
																			$emp_oct = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'10');
																					
																			}
																			?>
																			<input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][10]" value="<?php echo $emp_oct; ?>" maxlength="10">
																		</div>
																	</div>

																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>November</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_nov = '';
																			}
																			else 
																			{
																			$emp_nov = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'11');
																					
																			}
																			?>
																			<input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][11]" value="<?php echo $emp_nov; ?>" maxlength="10">
																		</div>
																	</div>
																	<div class="col-sm-6 padding-left-0">
																		<span class=""><h4>December</h4></span>
																		<div class="input-group ">
																			<span class="input-group-addon">$ </span> 
																			<?php 
																			if(!empty($model_plan_emp_contributions_premium->isNewRecord))
																			{
																			$emp_dec = '';
																			}
																			else 
																			{
																			$emp_dec = $model_plan_emp_contributions_premium->getPremiumvalue($model_plan_emp_contributions->emp_contribution_id,'12');
																					
																			}
																			?>
																			<input
																				type="text" class="form-control form-height price reset-emp-contribution" name="TblAcaEmpContributionsPremium[premium_value][12]" value="<?php echo $emp_dec; ?>" maxlength="10">
																		</div>
																	</div>




																</div> </label>
														</div>
													</div>

												</div>
												<div></div>
											

										</div>
										<div class="box-footer pull-right">

											<a type="submit" class="btn btn-default btn-default-cancel"
												href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/planclass?c_id=<?php echo $company_id;?> ">Cancel</a>
											<?= Html::submitButton('Save and Exit' , ['class' =>   'btn btn-success emp-cont-btn' ,'name' => 'button','value'=>'exit'])?>
    	
											<?= Html::submitButton('Save and Continue' , ['class' =>   'btn btn-success emp-cont-btn' ,'name' => 'button','value'=>'continue'])?>
    	
										</div>
									</div>

	<?php ActiveForm::end(); ?>
								</div>

							</div>
						</div>



					</div>



				</div>


			</div>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>
</div>
</div>
</div>
</div>

<script>
$(window).load(function() {
	 // get hash value
	  var hash = window.location.hash;
	
		if(hash == '#coveragetypewaitingperiod'){

		  	$('.steps').css( "display", "none" );
			$('.fixed-number').css( "display", "block");
		 	$(".parent-tabs").removeClass("accordian-band-color");
			$( "#collapseOne" ).prev().addClass("accordian-band-color");
			$(".custom-bg").removeClass("white");
		    $( "#collapseOne" ).prev().find('.custom-bg').addClass("white");
			$( ".panel-collapse" ).removeClass("in");
			$("#collapseOne").addClass( "in" );
			
		 
	  }
	 else if(hash == '#typeofcoverage'){

		  	$('.steps').css( "display", "none" );
			$('.fixed-number').css( "display", "block");
		 	$(".parent-tabs").removeClass("accordian-band-color");
			$( "#collapseTwo" ).prev().addClass("accordian-band-color");
			$(".custom-bg").removeClass("white");
		    $( "#collapseTwo" ).prev().find('.custom-bg').addClass("white");
			$( ".panel-collapse" ).removeClass("in");
			$("#collapseTwo").addClass( "in" );
			
		 
	  }
	  else if(hash == '#empcontributions'){

		  	$('.steps').css( "display", "none" );
			$('.fixed-number').css( "display", "block");
		 	$(".parent-tabs").removeClass("accordian-band-color");
			$( "#collapseThree" ).prev().addClass("accordian-band-color");
			$(".custom-bg").removeClass("white");
		    $( "#collapseThree" ).prev().find('.custom-bg').addClass("white");
			$( ".panel-collapse" ).removeClass("in");
			$("#collapseThree").addClass( "in" );
			
		 
	  }


	  <?php 
	  if(!empty($model_plan_coverage_type->plan_class_id))
	  {
	  	$plan_div[] = "1";
	  }
	  
	  if(!empty($model_plan_coverage_type_offered->coverage_type_id))
	  {
	  	$plan_div[] = "2";
	  }
	  
	  if(!empty($model_plan_emp_contributions_premium->emp_contribution_id))
	  {
	  	$plan_div[] = "3";
	  }
	  ?>
	var plan_div = <?php echo json_encode($plan_div); ?>;

	var plan_div_array = Object.keys(plan_div).map(function(k) { return plan_div[k] });

	
    for($i=0;$i<=plan_div_array.length-1;$i++)
    {

     var n =  plan_div_array[$i] ; 
    
    switch(n) {
        case '1':
        	if (!$( "#collapseOne" ).hasClass ('in'))
        	{
	        	$( "#collapseOne" ).prev().find('.steps').css( "display", "block" );
	        	$( "#collapseOne" ).prev().find('.check').css( "display", "block" );
	        	$("#collapseOne" ).prev().find('.fixed-number').css( "display", "none");
        	}
        	 break;
        case '2':
        	if (!$( "#collapseTwo" ).hasClass ('in'))
        	{
        	$( "#collapseTwo" ).prev().find('.steps').css( "display", "block" );
        	$( "#collapseTwo" ).prev().find('.check').css( "display", "block" );
        	$("#collapseTwo" ).prev().find('.fixed-number').css( "display", "none");
        	}
            break;
        case '3':
        	if (!$( "#collapseThree" ).hasClass ('in'))
        	{
        	$( "#collapseThree").prev().find('.steps').css( "display", "block" );
        	$( "#collapseThree").prev().find('.check').css( "display", "block" );
        	$("#collapseThree").prev().find('.fixed-number').css( "display", "none");
        	}
            break;
        
    }

    }

	
	
	<?php if(!empty($mv_coverage_months_array) && in_array ( '0', $mv_coverage_months_array, TRUE )){ ?>
	
		$(".specific_year").attr("disabled", true);

	<?php }?>
	
	
	<?php if(!empty($employee_essential_coverage_array) && in_array ( '0', $employee_essential_coverage_array, TRUE )){ ?>
	
		$(".specific_year1").attr("disabled", true);

	<?php }?>
});


function checkarraydiv()
{

	<?php 
			  if(!empty($model_plan_coverage_type->plan_class_id))
			  {
			  	$plan_div[] = "1";
			  }
			  
			  if(!empty($model_plan_coverage_type_offered->coverage_type_id))
			  {
			  	$plan_div[] = "2";
			  }
			  
			  if(!empty($model_plan_emp_contributions_premium->emp_contribution_id))
			  {
			  	$plan_div[] = "3";
			  }
			  ?>
			var plan_div = <?php echo json_encode($plan_div); ?>;

			var plan_div_array = Object.keys(plan_div).map(function(k) { return plan_div[k] });

			
		    for($i=0;$i<=plan_div_array.length-1;$i++)
		    {

		     var n =  plan_div_array[$i] ; 
		    
		    switch(n) {
		        case '1':
		        	if (!$( "#collapseOne" ).hasClass ('in'))
		        	{
			        	$( "#collapseOne" ).prev().find('.steps').css( "display", "block" );
			        	$( "#collapseOne" ).prev().find('.check').css( "display", "block" );
			        	$("#collapseOne" ).prev().find('.fixed-number').css( "display", "none");
		        	}
		        	else
		        	{
		        		$( "#collapseOne" ).prev().find('.steps').css( "display", "none" );
			        	$( "#collapseOne" ).prev().find('.check').css( "display", "none" );
			        	$("#collapseOne" ).prev().find('.fixed-number').css( "display", "block");
		        	
		        	}
		        	 break;
		        case '2':
		        	if (!$( "#collapseTwo" ).hasClass ('in'))
		        	{
		        	$( "#collapseTwo" ).prev().find('.steps').css( "display", "block" );
		        	$( "#collapseTwo" ).prev().find('.check').css( "display", "block" );
		        	$("#collapseTwo" ).prev().find('.fixed-number').css( "display", "none");
		        	}
		        	else
		        	{
		        		$( "#collapseTwo" ).prev().find('.steps').css( "display", "none" );
			        	$( "#collapseTwo" ).prev().find('.check').css( "display", "none" );
			        	$("#collapseTwo" ).prev().find('.fixed-number').css( "display", "block");
		        	
		        	}
		            break;
		        case '3':
		        	if (!$( "#collapseThree" ).hasClass ('in'))
		        	{
		        	$( "#collapseThree").prev().find('.steps').css( "display", "block" );
		        	$( "#collapseThree").prev().find('.check').css( "display", "block" );
		        	$("#collapseThree").prev().find('.fixed-number').css( "display", "none");
		        	}
		        	else
		        	{
		        		$( "#collapseThree" ).prev().find('.steps').css( "display", "none" );
			        	$( "#collapseThree" ).prev().find('.check').css( "display", "none" );
			        	$("#collapseThree" ).prev().find('.fixed-number').css( "display", "block");
		        	
		        	}
		            break;
		        
		    }

		    }
		    
}

</script>
																				
