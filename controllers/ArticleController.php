<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Article;
use Yii;

class ArticleController extends Controller{

    public function actionIndex()
    {
        echo 123;
        die;
        $model = Article::find();
//        $model->count();
       $pagination = new \yii\data\Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
       $data = $model->offset($pagination->offset)->limit($pagination->limit)->all();


        return $this->render('index',['data'=>$data , 'pagination'=>$pagination]);
    }

    public function actionAdd()
    {
        $model = new Article();

        if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post()) && $model->save()){

            return $this->redirect(['index']);
        }

        return $this->render('add',['model'=>$model]);

    }

    public function actionEdit($id){
        $id=(int)$id;
        if ($id > 0 && ($model = Article::findOne($id))){
            if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post()) && $model->save()){

                return $this->redirect(['index']);
            }
            return $this->render('edit',['model'=>$model]);

        }

        return $this->redirect(['index']);


    }

    public function actionDelete($id){
        $id=(int)$id;
        if ($id > 0 ){
            Article::findOne($id)->delete();
            return $this->redirect(['index']);
        }
            return $this->redirect(['index']);

        }



}
