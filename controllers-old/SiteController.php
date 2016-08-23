<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
//     public function behaviors()
//     {
//         return [
//             'access' => [
//                 'class' => AccessControl::className(),
//                 'only' => ['logout'],
//                 'rules' => [
//                     [
//                         'actions' => ['logout'],
//                         'allow' => true,
//                         'roles' => ['@'],
//                     ],
//                 ],
//             ],
//             'verbs' => [
//                 'class' => VerbFilter::className(),
//                 'actions' => [
//                     'logout' => ['post'],
//                 ],
//             ],
//         ];
//     }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    	//echo 'fdfds'; die();
    	$this->layout='main-home';
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
    //	echo 'ds'; die();
    	$this->layout='login';
    	
    //	echo 'dsdf'; die();
//         if (!Yii::$app->user->isGuest) {
//             return $this->goHome();
//         }

    //	print_r(Yii::$app->request->post()); die();
    	$request = Yii::$app->request;
        $model = new LoginForm();
        //if ($model->load(Yii::$app->request->post()) && $model->login()) {
          if (!empty(Yii::$app->request->post())) {	
        	
        	
           if(!empty($request->post ( 'username' )) && $request->post ( 'username' )=='admin@aca.com'){
			   
			  if(!empty($request->post ( 'password' )) && $request->post ( 'password' )=='Password1!'){
				
				return $this->redirect ( array ('/admin') );
				 
			   }  
			   
		   }elseif(!empty($request->post ( 'username' )) && $request->post ( 'username' )=='client@aca.com'){
			 
			 if(!empty($request->post ( 'password' )) && $request->post ( 'password' )=='Password1!'){
				
				return $this->redirect ( array ('/client/dashboard') );
				 
			   }   
			   
		   }else{
			  
		//	  $session = Yii::$app->session;		
			  
		//	  $session->setFlash ( 'custom', 'Invalid credentials' ); 			  
			
			  return $this->redirect(\Yii::$app->urlManager->createUrl("/login"));
		   }
        	
		   $session = Yii::$app->session;
		   	
		   $session->setFlash ( 'custom', 'Fields cannot be empty' );
		   	
		   return $this->redirect(\Yii::$app->urlManager->createUrl("/login"));
            //return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
