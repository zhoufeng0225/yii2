<?php
namespace app\controllers;

use yii\web\Controller;

class LoginController extends Controller{

    public function actionIndex(){

        return $this->renderPartial('index');
    }

}