<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class MasterdataController extends Controller
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
    
    public function actionLookupoptions()
    {
    	$this->layout='main';
    	return $this->render('lookupoptions');
    }
    
    public function actionAccountsettings()
    {
    	$this->layout='main';
    	return $this->render('accountsettings');
    }
    
    public function actionAddbrand()
    {
    	$this->layout='main';
    	return $this->render('addbrand');
    }
    
	  public function actionElements()
    {
    	$this->layout='main';
    	return $this->render('element');
    }
    
	
    public function actionEditbrand()
    {
    	$this->layout='main';
    	return $this->render('editbrand');
    }
	
	public function actionVideos()
    {
    	$this->layout='main';
    	return $this->render('videos');
    }
}
