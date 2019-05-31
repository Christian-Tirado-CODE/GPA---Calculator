<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\UserForm;
use app\models\CalcGPA;
use app\models\EntryForm2;
use yii\helpers\Url;
use app\models\AddToPostQueue;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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
        return $this->render('index');
    }




    /**
     * Displays about page.
     *
     * @return string
     */

    
   

    
    /* EntryForm action*/

    public function actionEntry()
    {
        $model = new EntryForm();
         
            
            if( $model->load(Yii::$app->request->post()) ){
                if( $model->save(false) ){
                    return $this->render('entry-confirm', ['model' => $model]);
                }
            }
            return $this->render('entry', ['model' => $model]);
    }


       //return $this->render('calcgpa', ['model' => $model]);
       /*http://localhost:8080/index.php?r=site/gpa */
   
public function actionNewPost(){
    if(Yii::$app->queue->delay(10)->push(new AddToPostQueue())){
        echo 'Ok';
    } else {
        echo 'Not Okay';
    }
}

}


