<?php 

use app\components\EncryptDecryptComponent;
?>
<style>
.skin-blue .sidebar-menu>li:hover>a,.skin-blue .sidebar-menu>li.active>a
	{
	border-left-color: #1E282C !important;
}

.red a {
	color: red !important;
}
</style>

<aside class="main-sidebar">

	<section class="sidebar">

		<div class="user-panel" style="min-height: 59px;">
			<div class="pull-left image"></div>
			<div class="pull-left info"></div>
		</div>

 <?php 
	$session = \Yii::$app->session;
	$logged_user_id = $session ['client_user_id'];
	
	$get_company_id = \Yii::$app->request->get ();
	$encrypt_component = new EncryptDecryptComponent ();
	if (! empty ( $get_company_id )) {
		$encrypt_company_id = $get_company_id ['c_id'];
			if (! empty ( $encrypt_company_id )) {
			$company_id = $encrypt_component->decryptUser ( $encrypt_company_id );
			}
	}
	?>
		<ul class="sidebar-menu">
		
		<?php $companyuserpermission = \Yii::$app->Permission->Checkclientpermission($logged_user_id,$company_id,'companyuser');
		if($companyuserpermission)
		{
		?>
			<li id="company_users" ><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/companyuser"><i
					class="fa fa-users"></i> <span>Company Users</span></a></li>
		<?php } 
		$basicreportinginfopermission = \Yii::$app->Permission->Checkclientpermission($logged_user_id,$company_id,'basicreportinginfo');
		if($basicreportinginfopermission)
		{
		?>
					
			<li id="basic_reporting" ><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/reporting#basicinformation"><i class="fa fa-file-o"></i>
					<span>Basic Reporting Info</span> <i
					class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu" id="basic_reporting_treeview" >
					<li id="basic_info_menu_1" class="basic_info_menu"><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/reporting#basicinformation"><i
							class="fa fa-angle-double-right"></i> <span>Basic Information</span></a></li>
					<li id="basic_info_menu_2" class="basic_info_menu"><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/reporting#empstatustracking"><i
							class="fa fa-angle-double-right"></i> <span>Large Emp. Status
								&amp; Tracking</span></a></li>
					<li id="basic_info_menu_3" class="basic_info_menu"><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/reporting#planofferingcriteria"><i
							class="fa fa-angle-double-right"></i> <span>Plan Offering
								Criteria</span></a></li>
					<li id="basic_info_menu_4" class="basic_info_menu"><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/reporting#designatedgovtentity"><i
							class="fa fa-angle-double-right"></i> <span>Designated Government
								Entity</span></a></li>
					<li id="basic_info_menu_5" class="basic_info_menu"><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/reporting#aggregatedgroup"><i
							class="fa fa-angle-double-right"></i> <span>Aggregated Group</span></a></li>
					<li id="basic_info_menu_6" class="basic_info_menu"><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/reporting#anythingelse"><i
							class="fa fa-angle-double-right"></i> <span>Anything Else to Tell
								Us</span></a></li>
				</ul></li>
				
		<?php }
		$benefitplaninfopermission = \Yii::$app->Permission->Checkclientpermission($logged_user_id,$company_id,'benefitplaninfo');
		if($benefitplaninfopermission)
		{
		?>
			<li id="benefit_plan_info_menu_main" class=""><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/plan#generalplaninformation"><i
					class="fa fa-keyboard-o"></i> <span>Benefit Plan Info</span> <i
					class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu" id="benefit_plan_info_menu_main_treeview">
					<li id="benefit_plan_info_menu_1" class="benefit_plan_info red"><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/plan#generalplaninformation"><i
							class="fa fa-angle-double-right"></i> <span>General Plan
								Information</span></a></li>
					<li id="benefit_plan_info_menu_2" class="benefit_plan_info red"><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/plan#meccoverage"><i
							class="fa fa-angle-double-right"></i> <span>MEC Coverage</span></a></li>
					<li id="benefit_plan_info_menu_3" class=""><a
						href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/planclass"><i
							class="fa fa-angle-double-right"></i> <span>Plan Classes</span></a></li>
				</ul></li>
				
			<?php }
		?>
		
			<li id="payroll_data" class=""><a
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/payroll"><i
					class="fa fa-money"></i> <span>Payroll Data</span></a></li>
		
			<li id="medical_plan_enrollment_data" class="red"><a
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/medical"><i
					class="fa fa-ambulance"></i> <span>Medical Plan Enrollment Data</span></a></li>
			<li id="aca_reporting_forms" class="red"><a
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/create"><i
					class="fa fa-wpforms"></i> <span>Create ACA Reporting Forms</span></a></li>
			<li id="manage_aca_reporting_forms" class="red"><a
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/manage"><i
					class="fa fa-floppy-o"></i> <span>Manage ACA Reporting Forms</span></a></li>
			
			
			<li id="e_file_forms" class="red"><a
				href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/efile"><i
					class="fa fa-file-text-o"></i> <span>E-File Forms</span></a></li>
					
		
		</ul>

	</section>

</aside>
