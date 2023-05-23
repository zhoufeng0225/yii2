<?php
namespace app\controllers;

use app\models\Seek;
use yii\web\Controller;
use Yii;

class SeekController extends Controller{
    public function actionIndex()
    {
        $model = Seek::find();
        $data = $model->all();
        return $this->render('index',['data'=>$data]);
    }

    public function actionAdd()
    {
        $model = new Seek();
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->Post()) &&$model->save()){
            return $this->redirect(['index']);
        }
        return $this->render('add',['model'=>$model]);
    }
    public function actionEdit($id)
    {
        $id = (int)$id;

        if ($id > 0 && $model = Seek::findOne($id)){
            if (Yii::$app->request->isPost && $model->load(Yii::$app->request->Post()) &&$model->save($id)){
                return $this->redirect(['index']);
            }
            return $this->render('edit',['model'=>$model]);
        }
        return $this->redirect(['index']);

    }
    public function actionDelete($id)
    {
        $id = (int)$id;
        if ($id > 0){
            $model = Seek::findOne($id)->delete();
            return $this->redirect(['index']);
        }
        return $this->redirect(['index']);
    }

}

