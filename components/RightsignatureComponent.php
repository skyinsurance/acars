<?php

namespace app\components;

use Yii;
use yii\base\Component;
use app\models\TblAcaSharefileFolders;
use app\models\TblAcaSharefileEmployees;
use app\models\TblAcaCompanies;

class RightsignatureComponent extends Component {
	
	/***** function to get the document details based on recipient email ********/
	function documentdetails($logged_email){
		
		$uri = "https://rightsignature.com/api/documents.json?recipient_email=".$logged_email;

		$headers = array("Content-type: application/json", "api-token: tPHIJhDqqcXz8yRhcYvFmclj11DyJta4RmIbXYD5");
				 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $uri);
		curl_setopt($ch, CURLOPT_TIMEOUT, 300);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_VERBOSE, FALSE);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			 
		$curl_response = curl_exec ($ch);
		
		return json_decode($curl_response);
		
	}
}