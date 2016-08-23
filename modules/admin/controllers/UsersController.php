<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class UsersController extends Controller
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
	
	  public function actionAddusers()
    {
    	$this->layout='main';
    	return $this->render('adduser');
    }
    
    public function actionUpdateusers()
    {
    	$this->layout='main';
    	return $this->render('updateuser');
    }
    
    public function actionPermission()
    {
    	$this->layout='main';
    	return $this->render('permission');
    }
}
