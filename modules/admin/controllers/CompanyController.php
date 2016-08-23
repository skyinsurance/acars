<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class CompanyController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	$this->layout='main';
        return $this->render('index');
    }
	
    public function actionAddform()
    {
    	$this->layout='main';
    	return $this->render('addform');
    }
    
    public function actionEditform()
    {
    	$this->layout='main';
    	return $this->render('editform');
    }

}
