<?php

namespace app\components;

use Yii;
use yii\base\Component;
use app\controllers\SiteController;
/*
 * MailComponent is used for sending all mail inside the application
 */
class MailComponent extends Component {
	
	//Function is used for sending mail  with activation link if new user is created in Admin or Client.
	public function Createadminusermail($to,$from,$name,$link) {
		$message = \Yii::$app->mailer->compose ()
		->setFrom ($from)
		->setTo ( $to )
		->setSubject ( 'Activate ACA Account' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
							Your account is created in ACA Reporting Service <br>
							To activate your account please click on the below link.<br>
							<a href="' . $link . '" target="_blank">Click here</a><br><br>
							 Thanks<br>
							 ACA Reporting Service
						')->send();
		
		
	}
	
	//Function is used for sending mail with forgot password link to the particular user.
	public function Forgotpasswordmail($to,$name,$link)
	{
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( 'admin@acareportingservice.com' )
		->setTo ( $to )
		->setSubject ( 'Forgot Password' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
							
							To reset your account password please click on the below link.<br>
							<a href="' . $link . '" target="_blank">Click here</a><br><br>
							 Thanks<br>
							 ACA Reporting Service
						')->send();
		
	}
	
	public function Resetlink($to,$name,$link)
	{
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( 'admin@acareportingservice.com' )
		->setTo ( $to )
		->setSubject ( 'Activate ACA Account' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
				
							To activate your account please click on the below link.<br>
							<a href="' . $link . '" target="_blank">Click here</a><br><br>
							 Thanks<br>
							 ACA Reporting Service
						')->send();
	
	}
	
	//Function is used for sending mail to particular client if new client has been assigned to it.
	public function Assignclientmail($to,$from,$name,$client_details)
	{
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( $from )
		->setTo ( $to )
		->setSubject ( 'Assigned to New client' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
				
							Your email id has been assigned to new client<br>
				            Client Name : '.$client_details['client_name'].'<br><br>
							 Thanks<br>
							 '.$client_details['client_brand'].'
						')->send();
						
		return $message;
	}
	
	//Function is used for sending mail to particular client if additional ein has been added in its account.
		public function Additionaleins($to,$from,$name,$eincount)
	{
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( $from )
		->setTo ( $to )
		->setSubject ( 'Company List' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
				 
				             It is happy to inform you that <br>
							 new companies added to your list. <br>
							 New Companies : '.$eincount.'<br><br>
							
							 Thanks<br>
							 ACA Reporting Service
						')->send();
	}
	
	
	public function Uploaddocumentusermail($to, $from, $document_name, $company_number,$company_name,$logged_name)
	{
		
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( $from )
		->setTo ( $to )
		->setSubject ( 'New Document Uploaded' )
		->setHtmlBody ( 'Hi ' . $to . ' ,<br><br>
				
							A new file has been uploaded by '.$logged_name.'('.$company_number.')<br>
				            Please check it out in the application.<br>
							
						')->send();
						
						
	}
	
	
	public function Uploaddocumentadminmail ($to, $from, $document_name, $company_number,$company_name,$logged_name)
	{
		
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( $from )
		->setTo ( $to )
		->setSubject ( 'New Document Uploaded' )
		->setHtmlBody ( 'Hi ' . $to . ' ,<br><br>
				
							A new file has been uploaded by '.$logged_name.'('.$company_number.')<br>
				            Please check it out in the application.<br>
							
						')->send();
			
						
	}
	
	
}