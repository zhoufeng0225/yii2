<?php

namespace app\controllers;

use app\models\TestForm;
use yii\web\Controller;

class TestController extends Controller{
    public function actionIndex()
    {
        $model = new TestForm();
        return $this->renderPartial('index',['model'=>$model]);
    }

    public function actionFormat()
    {
        $formatter = \Yii::$app->formatter;

        echo $formatter->asDate('2023-5-19','long');

        echo $formatter->asPercent(0.125, 2);

        echo $formatter->asEmail('cebe@example.com');

    }
}
