<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\UploadForm;
use yii\web\UploadedFile;

class FileController extends Controller{
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost){
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');            if ($model->upload()){
                echo 123;
            }
        }
        return $this->render('upload',['model'=>$model]);

    }
}