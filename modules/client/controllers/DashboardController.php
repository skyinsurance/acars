<?php

namespace app\modules\client\controllers;
use yii\web\Controller;
use yii;
use app\models\TblAcaSharefileFolders;
use app\models\TblAcaSharefileEmployees;
use app\models\UploadfileForm;
use yii\web\UploadedFile;
use app\models\TblAcaClients;
use app\models\TblAcaCompanyUsers;
use app\models\TblAcaUsers;
use app\models\TblAcaCompanies;
use app\models\TblAcaCompanyUserPermission;
use app\models\TblAcaStaffUsers;
use app\models\TblAcaRightSignatureDocs;

class DashboardController extends Controller
{
    public function actionIndex()
    {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{ 
    	$this->layout='main';
		
		/****** initializing session variables *******/
		$session = \Yii::$app->session;
		$logged_user_id = $session ['client_user_id'];
		$client_ids = $session ['client_ids']; // all related clients to the logged user
		$company_ids = $session ['company_ids']; // all related companies to the logged user
		$mapped_company_ids = array_map ( function ($piece) {
			return ( string ) $piece;
		}, $company_ids );
			
		$model_company_user = new TblAcaCompanyUsers ();
		$model_clients = new TblAcaClients();
		$model_companies = new TblAcaCompanies ();
		$model_company_user_permission = new TblAcaCompanyUserPermission ();
		$right_sign_permission = FALSE;
		$right_sign_docs = array();
		$company_client_id = '';
		$users_list = '';
		
		$c_id = Yii::$app->request->get ( 'c_id' );
		$company_id = \Yii::$app->EncryptDecrypt->decryptUser($c_id);	
		
		/// getting the client id first based on company id
		///		
		$check_company_details = $model_companies->Companyuniquedetails ( $company_id );
		
		if(!empty($check_company_details))
		{
		$company_client_id = $check_company_details->client_id;
		}
		
		if (! empty ( $check_company_details ) && in_array ( $company_client_id, $client_ids, TRUE ) && in_array ( $company_id, $mapped_company_ids, TRUE )) {
		
		$dashboardpermission = \Yii::$app->Permission->Checkclientpermission($logged_user_id,$company_id,'dashboard');
		if($dashboardpermission){
			
			/**Check for sign document permission**/
			$signdocumentpermission = \Yii::$app->Permission->Checkclientpermission($logged_user_id,$company_id,'signdocument');
			
			//$signdocumentpermission = TRUE;
			
			/******** checking whether the company has company user or not *******/
			///
			/// getting the client details based on client id
			///
			$client_details = $model_clients->Clientuniquedetails($company_client_id);
			$client_user_id = $client_details->user_id;
			$client_email_id = $client_details->email;
			///
			/// getting the user details based on the email ID (checking if there are multiple accounts with same email)
			///
			$user_details = TblAcaClients::find()->where(['email' => $client_email_id])->orderBy(['client_id' => SORT_ASC])->All();
				
			$user_count = count($user_details);
			///
			/// getting the company users based on client id
			///
			$company_user_details = TblAcaCompanyUsers::find()->where(['client_id' => $company_client_id])->orderBy(['company_user_id' => SORT_ASC])->All();
				
			$company_user_count = count($company_user_details);
				
			
			if(!empty($session['is_client']) && $session['is_client'] == 'client')
			{					
				///
				/// checking the conditions
				///
				if($user_count>1){
					if($user_details[0]->client_id == $company_client_id){					
						$right_sign_permission = TRUE;
					}
					else{				
						if(!empty($company_user_details)){					
							if(($company_user_count == 1) || $company_user_count == 0){
								$right_sign_permission = FALSE;
							}
							else{
								foreach($company_user_details as $company_user){							
									if($logged_user_id != $company_user->user_id){
										$company_user_id = $company_user->company_user_id;
										$user_permissions = $model_company_user_permission->Checkrightsignpermission($company_user_id,$company_id);
										
										if($user_permissions == 'rightsignpermission'){
											$right_sign_permission = TRUE;
											break;
										}
										else{
											$right_sign_permission = FALSE;
										}
									}
								}
								
								
							}
						}
						else{
							$right_sign_permission = FALSE;
						}
					}
				}
				else{				
					$right_sign_permission = TRUE;
				}
			}
			elseif(!empty($session['is_client']) &&  $session['is_client'] == 'companyuser')
			{	
				$logged_company_user = TblAcaCompanyUsers::find()->where(['user_id' => $logged_user_id])->andWhere(['client_id' => $company_client_id])->One();
				$company_user_id = $logged_company_user->company_user_id;
				/********* checking for sign documents permissions **********/
				$user_permissions = $model_company_user_permission->Checkrightsignpermission($company_user_id,$company_id);
				if($user_permissions == 'rightsignpermission'){
					$right_sign_permission = TRUE;				
				}
				else{
					$right_sign_permission = FALSE;
					/******* get the list of company users who have sign doc permission ********/
					foreach($company_user_details as $company_users){
						/********* checking for sign documents permissions **********/
						$user_permission = $model_company_user_permission->Checkrightsignpermission($company_users->company_user_id,$company_id);
						if($user_permission == 'rightsignpermission'){
							$users_list .= ' '.$company_users->first_name.' '.$company_users->last_name.',';				
						}
					}
					$users_list = rtrim($users_list,',');
				}				
			}
				
			$client_details = TblAcaClients::find()->where(['user_id' => $client_user_id])->orderBy(['client_id' => SORT_ASC])->groupBy(['user_id'])->One();
			
			if($client_details->client_id == $company_client_id){
				/********* now checking whether already signed the document or not *************/
				foreach($company_user_details as $company_user_detail){
					 
					$user_email = $company_user_detail->email;			
					//if($client_email_id != $user_email){
						/********* now getting the Right signature docs based on logged email ***********/		
						/*** first check in our db ***/
						$right_sign_docs = TblAcaRightSignatureDocs::find()->where(['recipient_email' => $user_email])->One();
						
						/*** records are not in our db ***/
						if(empty($right_sign_docs)){
							
							/** getting the Right signature docs **/
							$right_sign_result = \Yii::$app->Rightsignature->documentdetails($user_email);
							
							/** if docs available in RIGHT SIGNATURE **/
							if(!empty($right_sign_result->page) && !empty($right_sign_result->page->total_documents)){								
								
								if($right_sign_result->page->total_documents != 0){
									
									/*** insert in our db ***/				
									$model_rightsign = new TblAcaRightSignatureDocs();
								
									$model_rightsign->guid = $right_sign_result->page->documents[0]->guid;
									$model_rightsign->doc_name = $right_sign_result->page->documents[0]->original_filename;
									$model_rightsign->doc_subject = $right_sign_result->page->documents[0]->subject;
									$model_rightsign->recipient_name = $right_sign_result->page->documents[0]->recipients[1]->name;
									$model_rightsign->recipient_email = $right_sign_result->page->documents[0]->recipients[1]->email;
									$model_rightsign->signed_doc_url = urldecode($right_sign_result->page->documents[0]->signed_pdf_url);
									$model_rightsign->isNewRecord = true;
									$model_rightsign->doc_id = NULL;
							
									if($model_rightsign->save()){
										/**** update company status to signed ***/
										$company_model = TblAcaCompanies::Companyuniquedetails($company_id);
										$company_model->reporting_status = 24;
										$company_model->save();
										break;
									}
									
								}
							}
						}
						else{
							break;
						}
					//}
				}
			}
			else{
				
				foreach($company_user_details as $company_user_detail){
					 
					$user_email = $company_user_detail->email;
					
					if($client_email_id != $user_email){
						
			
						/********* now getting the Right signature docs based on logged email ***********/		
						/*** first check in our db ***/
						$right_sign_docs = TblAcaRightSignatureDocs::find()->where(['recipient_email' => $user_email])->One();
						
						/*** records are not in our db ***/
						if(empty($right_sign_docs)){
							
							/** getting the Right signature docs **/
							$right_sign_result = \Yii::$app->Rightsignature->documentdetails($user_email);
							
							if(!empty($right_sign_result->page) && !empty($right_sign_result->page->total_documents)){								
								
								if($right_sign_result->page->total_documents != 0){
									
									/*** insert in our db ***/				
									$model_rightsign = new TblAcaRightSignatureDocs();
								
									$model_rightsign->guid = $right_sign_result->page->documents[0]->guid;
									$model_rightsign->doc_name = $right_sign_result->page->documents[0]->original_filename;
									$model_rightsign->doc_subject = $right_sign_result->page->documents[0]->subject;
									$model_rightsign->recipient_name = $right_sign_result->page->documents[0]->recipients[1]->name;
									$model_rightsign->recipient_email = $right_sign_result->page->documents[0]->recipients[1]->email;
									$model_rightsign->signed_doc_url = urldecode($right_sign_result->page->documents[0]->signed_pdf_url);
									$model_rightsign->isNewRecord = true;
									$model_rightsign->doc_id = NULL;
							
									if($model_rightsign->save()){
										/**** update company status to signed ***/
										$company_model = TblAcaCompanies::Companyuniquedetails($company_id);
										$company_model->reporting_status = 24;
										$company_model->save();
										break;
									}							
								}
							}
						}
						else{
							break;
						}
					}
				}
			}
			
			
			/********* checking permissions for upload & download documents ***********/
			$document_upload_permission = FALSE;
			$document_download_permission = FALSE;
			$company_user_total_details = $model_company_user->FindByuserId($logged_user_id);
			if(!empty($company_user_total_details)){
				$company_user_id = $company_user_total_details->company_user_id;
				$user_upload_permissions = $model_company_user_permission->Checkfileuploadpermission($company_user_id,$company_id);
				$user_download_permissions = $model_company_user_permission->Checkfiledownloadpermission($company_user_id,$company_id);
											
				if($user_upload_permissions == 'uploadpermission')
				{
					$document_upload_permission = TRUE;
				}
				else
				{
					$document_upload_permission = FALSE;
				}
				if($user_download_permissions == 'downloadpermission')
				{
					$document_download_permission = TRUE;
				}
				else
				{
					$document_download_permission = FALSE;
				}
			}
			
			/*** get list of available documents in SHAREFILE ***/		
			$folder_children ='';
			/*** get sharefile folder details ***/	
			$folder_details = TblAcaSharefileFolders::find()->where(['company_id' => $company_id])->One();
			
			if(!empty($folder_details)){
				$folder_name = $folder_details->folder_name;
				$sharefile_folder_id = $folder_details->sharefile_folder_id;
				$client_id = $folder_details->client_id;
				
				/*** get sharefile account details ***/		
				/*$sharefile_details = TblAcaSharefileEmployees::find()->where(['user_id' => $logged_user_id])->One();
								
				$new_username = $sharefile_details->username;
				$enc_password = $sharefile_details->password;
				$new_password = \Yii::$app->EncryptDecrypt->decryptUser($enc_password);			
				$client_logged_id = $sharefile_details->user_id;*/
								
				/******* getting the sharefile credentials ******/
				$share_file = json_decode(file_get_contents(getcwd().'/config/sharefile-credentials.json'));
				
											
				$hostname = $share_file->hostname;
				$client_api_id = $share_file->client_api_id;
				$client_secret = $share_file->client_secret;
				$username = $share_file->username;
				$password = $share_file->password;
				
				/*** getting list of items in sharefile ***/
				
				$result = \Yii::$app->Sharefile->get_children($hostname, $client_api_id, $client_secret, $username, $password, $sharefile_folder_id);
				
				if(!empty($result)){
					$folder_children = $result->value;
				}
				else{
					$folder_children = '';
				}
				
				/****** removing already downloaded files  ********/
				exec('rm -R '.getcwd ().'/Images/sharefile_docs/'.$folder_name);
				exec('rm '.getcwd ().'/Images/sharefile_docs/'.$folder_name.'.zip');
				
			}
				//print_r($folder_details);die();		
			return $this->render('index', 
				array('folder_children'=>$folder_children,
					  'right_sign_docs'=>$right_sign_docs,
					  'right_sign_permission'=>$right_sign_permission,
					  'document_upload_permission'=>$document_upload_permission,
					  'document_download_permission'=>$document_download_permission,
					  'signdocumentpermission'=>$signdocumentpermission,
					  'model_companies_year'=>$check_company_details,
					  'session'=>$session,
					  'users_list'=>$users_list
					  )
			);
		}
		} else {
					return $this->redirect ( array (
							'/client/companies' 
					) );
				}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
    }
	
	
	/******** Action to Download Secure Documents ***********/

	public function actionDownloadfiles(){
		
		$session = \Yii::$app->session;
		$logged_user_id = $session ['client_user_id'];
		$request = Yii::$app->request;
		$c_id = $request->get ( 'company_id' );
		$company_id = \Yii::$app->EncryptDecrypt->decryptUser($c_id);
		
		/*** get sharefile folder details ***/			
		$folder_details = TblAcaSharefileFolders::find()->where(['company_id' => $company_id])->One();
		
		$sharefile_folder_id = $folder_details->sharefile_folder_id;
		$folder_name = $folder_details->folder_name;
		$file_id = Yii::$app->request->get ('id');
		$file_name = Yii::$app->request->get ('name');
		
		$client_id = $folder_details->client_id;
		
		/*** get sharefile account details ***/
		$sharefile_details = TblAcaSharefileEmployees::find()->where(['user_id' => $logged_user_id])->One();
						
		$new_username = $sharefile_details->username;
		$enc_password = $sharefile_details->password;
		$new_password = \Yii::$app->EncryptDecrypt->decryptUser($enc_password);
		$client_logged_id = $sharefile_details->user_id;
						
		/******* getting the sharefile credentials ******/
		$share_file = json_decode(file_get_contents(getcwd().'/config/sharefile-credentials.json'));
									
		$hostname = $share_file->hostname;
		$client_api_id = $share_file->client_api_id;
		$client_secret = $share_file->client_secret;
		
		/*** download item from sharefile to our local folder ***/		
		$result = \Yii::$app->Sharefile->download_item($hostname, $client_api_id, $client_secret, $new_username, $new_password, $file_id, $file_name, $folder_name);
		
		
		//$result = \Yii::$app->Sharefile->download_content($hostname, $client_api_id, $client_secret, $new_username, $new_password, $sharefile_folder_id);	
		//$result = \Yii::$app->Sharefile->create_link($hostname, $client_api_id, $client_secret, $new_username, $new_password, $sharefile_folder_id);	
		
		print_r($result);
	}
	
	/******* Action to Convert all files into a Zipfolder ******/
	
	public function actionConvertfoldertozip(){
		$request = Yii::$app->request;
		$c_id = $request->get ( 'company_id' );
		$company_id = \Yii::$app->EncryptDecrypt->decryptUser($c_id);
		
		/*** get sharefile folder details ***/				
		$folder_details = TblAcaSharefileFolders::find()->where(['company_id' => $company_id])->One();
		
		$sharefile_folder_id = $folder_details->sharefile_folder_id;
		$folder_name = $folder_details->folder_name;
		
		/*** converting the folder into zip ***/
		$result = \Yii::$app->Sharefile->zipaDirectory(getcwd ().'/Images/sharefile_docs/'.$folder_name.'/', getcwd ().'/Images/sharefile_docs/'.$folder_name.'.zip');
		if($result == 'success'){
			$res_array = array("result"=>"success","folder"=>$folder_name);
			return json_encode($res_array);
		}
	}
	
	/******* Action to delete already downloaded folders drom server ******/
	
	public function actionRemovedownloadedfolders(){
		$request = Yii::$app->request;
		$c_id = $request->get ( 'id' );		
		$company_id = \Yii::$app->EncryptDecrypt->decryptUser($c_id);
		
		/*** get sharefile folder details ***/
		$folder_details = TblAcaSharefileFolders::find()->where(['company_id' => $company_id])->One();
		$folder_name = $folder_details->folder_name;
		
		/**** removing files & folders from server ***/
		exec('rm -R '.getcwd ().'/Images/sharefile_docs/'.$folder_name);
		exec('rm '.getcwd ().'/Images/sharefile_docs/'.$folder_name.'.zip');
		return 'success';
	}
	
	/******* Action to upload documents into sharefile ******/
	public function actionUploaddocuments(){
		
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			exec('rm -fr '.getcwd ().'/Images/sharefile_docs/*');
			$model_companies = new TblAcaCompanies ();
			$model_clients = new TblAcaClients();
			$model_company_users = new TblAcaCompanyUsers ();
			$model_users = new TblAcaUsers ();
			$model_company_user_permission = new TblAcaCompanyUserPermission ();
			$model_staff_users = new TblAcaStaffUsers();
			
			$logged_name = '';
			/****** initializing session variables *******/
			$session = \Yii::$app->session;
			$logged_user_id = $session ['client_user_id'];
			$admin_user_id = $session ['admin_user_id'];
			$client_ids = $session ['client_ids']; // all related clients to the logged user
			$company_ids = $session ['company_ids']; // all related companies to the logged user
			
			/**Check logged in user if client or company user**/
			if(!empty($session ['is_client']) && $session ['is_client'] == 'client')
			{
				$client_details = $model_clients->findbyuserid($logged_user_id);
				$logged_name = $client_details->contact_first_name.' '.$client_details->contact_last_name;
			}
			else{
				
				$company_user_details = $model_company_users->FindByuserId($logged_user_id);
				$logged_name = $company_user_details->first_name.' '.$company_user_details->last_name;
	
			}
			
			/******* getting requestr variables from URL ******/
			$request = Yii::$app->request;
			$c_id = $request->get ( 'c_id' );
			$company_id = \Yii::$app->EncryptDecrypt->decryptUser($c_id);
			
			$check_company_details = $model_companies->Companyuniquedetails ( $company_id );
			$company_client_id = $check_company_details->client_id;
			$company_number = $check_company_details->company_client_number;
			$company_name = $check_company_details->company_name;
			
			/***** Get client details****/
			$client_details = $model_clients->Clientuniquedetails($company_client_id);
			$client_account_manager = $client_details->account_manager;
			$client_package = $client_details->package_type;
			$client_email = $client_details->email;
			
			
			/******* getting the sharefile folder details based on comapny id ******/			
			$folder_details = TblAcaSharefileFolders::find()->where(['company_id' => $company_id])->One();
			if(!empty($folder_details)){
				$sharefile_folder_id = $folder_details->sharefile_folder_id;
				$client_id = $folder_details->client_id;
			}
			
			/******* getting the sharefile login details based on logged id ******/			
			$sharefile_details = TblAcaSharefileEmployees::find()->where(['user_id' => $logged_user_id])->One();
			if(!empty($sharefile_details)){
				$new_username = $sharefile_details->username;
				$enc_password = $sharefile_details->password;
				$new_password = \Yii::$app->EncryptDecrypt->decryptUser($enc_password);
				$client_logged_id = $sharefile_details->user_id;
								
				/******* getting the sharefile credentials ******/
				$share_file = json_decode(file_get_contents(getcwd().'/config/sharefile-credentials.json'));
											
				$hostname = $share_file->hostname;
				$client_api_id = $share_file->client_api_id;
				$client_secret = $share_file->client_secret;

				/****** uploading the document into local server *****/
				$model_upload_form = new UploadfileForm();
				$file = UploadedFile::getInstance ( $model_upload_form, 'Document' );
					
				if ($file) {							
					$ext = explode ( ".", $file->name );
					$model_upload_form->Document = $file->name;
					$path = \Yii::$app->basePath . '/Images/sharefile_docs/' . $model_upload_form->Document;
								
					$file->saveAs ( $path );
					chmod ( $path, 0777 );
				}
				
				/****** upload the document into sharefile ********/
				$local_path = $path;
				$result = \Yii::$app->Sharefile->upload_file($hostname, $client_api_id, $client_secret, $new_username, $new_password, $sharefile_folder_id, $local_path);
				
				/********** redirection after upload *******/
				if (strpos($result, 'OK') !== false) {
					exec('rm '.$local_path);
					$from = 'admin@acareporting.com';
					$document_name = $model_upload_form->Document;
						
					/****** sending mails after document upload *******/
					if(!empty($admin_user_id) && $admin_user_id == $client_account_manager){
							
						//get all company users
						$all_company_users = $model_company_users->FindAllbyclient($company_client_id,$company_id);
						$logged_manager_details = $model_staff_users->findById($admin_user_id);
						$logged_name = $logged_manager_details->first_name.' '.$logged_manager_details->last_name;
						
						
						if(!empty($all_company_users)) //mail to users
						{
							foreach($all_company_users as $users)
							{
								$user_permissions = $model_company_user_permission->Checkfileuploadpermission($users->company_user_id,$company_id);
								
								if($user_permissions == 'uploadpermission')
								{
								$to = $users->email;
								
								\Yii::$app->CustomMail->Uploaddocumentusermail ( $to, $from, $document_name, $company_number,$company_name,$logged_name );
								}	
						
							}
							
							
						}
						
						
						// mail to the client
						
						\Yii::$app->CustomMail->Uploaddocumentusermail ( $client_email , $from, $document_name, $company_number,$company_name,$logged_name );
						
					}
					else{
						if($client_package != 12){ //12 denotes Budget Package
						
						
							//mail to admin
							if(!empty($client_account_manager))
							{
								
								$account_manager_details = $model_users->findById($client_account_manager);
								$account_manager_mail = $account_manager_details->useremail;
								
								\Yii::$app->CustomMail->Uploaddocumentadminmail ( $account_manager_mail , $from, $document_name, $company_number,$company_name,$logged_name );
					
								
							}
							
							
						}
						else{
							
							//mail to ankamranjithkumar@gmail.com
							\Yii::$app->CustomMail->Uploaddocumentadminmail ( 'help@skyinsurancetech.com' , $from, $document_name, $company_number, $company_name,$logged_name );
					
						}
					}
					\Yii::$app->session->setFlash ( 'success', 'Document uploaded successfully' );
					return $this->redirect ( array ('/client/dashboard?c_id='.$c_id) );
				}
			}
			else{
				\Yii::$app->session->setFlash ( 'error', 'An error occured while uploading, please contact support' );
				return $this->redirect ( array ('/client/dashboard?c_id='.$c_id) );
			}			
					
		}
	}
	

    public function actionCompany()
    {
    	$this->layout='main';
    	return $this->render('company');
    }
    
    public function actionReporting()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('info');
    }
    
    public function actionPlan()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('plan');
    }
	
	public function actionPlanclass()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('planclass');
    }
    
    
    public function actionAddplanclass()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('addplanclass');
    }
    
    public function actionUpdateplanclass()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('updateplanclass');
    }
    
    public function actionUsers()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('users');
    }
    
    
    public function actionAddusers()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('addusers');
    }
    
    public function actionMedical()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('medical');
    }
    
    public function actionCreate()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main'; 
    	return $this->render('createaca');
    }
    
    public function actionManage()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('manageaca');
    }
    
    public function actionEfile()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('efile');
    }
	
	  public function actionPermission()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('permission');
    }
    
    public function actionUpdatecompanyusers()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('updatecompanyusers');
    }	
}
