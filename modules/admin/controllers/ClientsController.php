<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class ClientsController extends Controller
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
    
    public function actionSubscription()
    {
    	$this->layout='main';
    	return $this->render('subscription');
    }
    public function actionAddsubscription()
    {
    	$this->layout='main';
    	return $this->render('addsubscription');
    }
    
    public function actionEditclient()
    {
    	$this->layout='main';
    	return $this->render('editclient');
    }
    
    public function actionUpdatesubscription()
    {
    	$this->layout='main';
    	return $this->render('updatesubscription');
    }
}
