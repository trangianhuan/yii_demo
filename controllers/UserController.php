<?php
namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\Controller;
//use yii\httpclient\Client;
use app\models\Article;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\Article';

    // /**
    //  * {@inheritdoc}
    //  */
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'only' => ['logout'],
    //             'rules' => [
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }
    public $enableCsrfValidation = false;
    // public function actionIndex() {
    //     \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    //     $rest = Article::find ()->all ();
    //     return $rest;
    // }
    // public function actionCreate() {
    //     \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    //     $rest = new Article ();
    //     $rest->attributes = \Yii::$app->request->post ();
    //     if ($rest->validate ())

    //     {

    //         $rest->save ();

    //         return array (
    //                 'status' => 1,
    //                 'data' => 'Đã thêm thành công'
    //         );
    //     }

    //     else

    //     {

    //         return array (
    //                 'status' => 0,
    //                 'data' => $student->getErrors ()
    //         );
    //     }
    // }

    // public function actionIndex()
    // {
    //     return Article::findIdentity(100);
    //     //return User::find(100);
    // }
}