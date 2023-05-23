<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Article;
use app\models\Category;

class HomeController extends Controller
{
// 	public function actionIndex(){
// 		$data = [
// 			'name'=>'xz',
// 			'age'=>21,
// 		];
// 		$request = \Yii::$app->request;
// 		echo $request->get('id',1);

// 		echo $request->post('username','houdun');
// 		echo '<br/>';
// 		echo $request->userIP;
// 		echo '<br/>';
// 		echo $request->isGet;
// 		$data = $request->isPost;
// 		dd($data);
// 		p($data);
// 	}
// }


	public function actionIndex(){
		// $request = \Yii::$app->request;
		// $data = [
		// 	'ip'=>$request->userIP,
		// 	'id'=> $request->get('id'),
		// 	'arr' =>[
		// 		'age'=>7,
		// 		'class'=>5,
		// 	],
		// ];

		// return $this->renderPartial('index',$data,
		// );
		// $article = new Article();
		// $article->title = '12124123';
		// $article->num = '23';
		// $data = $article->save();
		// $id=$article->attributes['id'];
		// dd($id);


	}


	public function actionAbout(){
		$category = Category::findOne(2);
		// $id = $category->attributes['id'];

		// $articles = Article::find()->where('cate_id=:id',[':id'=>$id])->all();
		// dd($articles);
		//关联模型
		$articles = $category->hasMany('app\models\Article',['cate_id'=>'id'])->all();

		//Article::className() 等于 app\models\Article
		$articles = $category->hasMany(Article::className(),['cate_id'=>'id'])->all();

		dd($articles);
		return $this->render('about');
	}


	public function actionLinks(){
		$category = Category::findOne(2);
	
		$articles = $category->articles;

		//$articles = $category->articles;

	   dd($articles);
		
	}

	public function actionCate(){
		$article = Article::findOne(5);
	
		// $category = $article->getCategory();
		
		// $category = $article->hasOne('app\models\Category',['id'=>'cate_id'])->asArray()->all();

		$category = $article->category;

		dd($category);
		
	}



	public function actionAllatc(){
		// $article = Article::find()->all();

		// foreach ($article as $article) {
		// 	$category[] = $article->category;
		// }


		$article = Article::find()->with('category')->asArray()->all();

	
		

		dd($article);
		
	}


	public function actionGo(){
		//重定向
		//$this->redirect(['home/allatc']);
		//$this->goHome();
		//返回上一级目录
		///$this->goBack();
	}

	public function actionRule(){
		$data = [
			'Article'=>[
				'num'=>5,
				'username'=>'xz',
			]
		];
		$article = new Article;

		$article->load($data);
		var_dump($article);

	}



}