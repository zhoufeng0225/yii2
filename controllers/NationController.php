<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Nation;
use yii\helpers\Url;
use yii\data\Pagination;
use yii\widgets\LinkPager;


class NationController extends Controller{
	public function actionIndex(){
		$nation = new Nation();


		$data = $nation->find()->asArray()->all();
		//$nation = Nation::findOne(2);
		$count = count($data);
        $pagination = new Pagination(['totalCount' => $count ,'pageSize'=>1]);
//        echo $pagination->offset;
//        echo $pagination->limit;
//        echo LinkPager::widget([
//            'pagination' => $pagination,
//            'options' => [
//                'id' => 'page'
//            ],
//            'nextPageLabel' => '下一页',
//            'lastPageLabel' => '最后一页',
//            'firstPageLabel' => '第一页',
//        ]);






		return $this->render('index',['data'=>$data,]);
	}


	public function actionAdd(){

		if ($_POST) {

			$data = [
				'Nation' => [
					'name' => $_POST['name'],
					'password' => $_POST['password'],
					'confirm' => $_POST['confirm'],
				]
			];

			$nation = new Nation();
			$nation->load($data);

			if ($nation->validate()) {

				$nation->name = $_POST['name'];
				$nation->count = 0;
				$nation->password = $_POST['password'];
				// echo $_POST['name'];
				// echo $_POST['password'];
				// echo $_POST['confirm'];
				// var_dump($nation);
				// die;

				$nation->save();
				$id = $nation->attributes['id'];

			}else{
				var_dump($nation->getErrors());
				die;
			}
		
		}

		return $this->render('add');
	}



	public function actionUpdata(){
		if ($_POST) {

			$nation = Nation::findOne($_GET['id']);
			$nation->name=$_POST['name'];
			$nation->count=0;
			$nation->password=$_POST['password'];
			$nation->save();
			$id = $nation->attributes['id'];		
		}

		$nation = new Nation();

		$nation->updateAllCounters(['count'=>1],['id'=>$_GET['id']]);
		
		$data = $nation->find()->where(['id'=>$_GET['id']])->asArray()->one();

	
		return $this->render('updata',['data'=>$data]);	
	

	}


	public function actionDelete(){
		$nation = Nation::findOne($_GET['id']);
		//var_dump($nation);
	
	  // $nation->delete();

	    Nation::deleteAll(['id'=>$_GET['id']]);

	    $this->redirect(['nation/index']);
		

	}

    public function actionDb()
    {
//        $nation = Nation::find()->where(['name'=>'xxx'])->asArray()->offset(2)->limit(2)->all();
//        dd($nation);

          var_dump(Nation::updateAll(['name' => 'Updata'] , ['id'=>2]));
    }

    public function actionUrl()
    {
        echo Url::base();
        echo '</br>';
        echo Url::base(true);
        echo '</br>';
        echo Url::home();
        echo '</br>';
        echo Url::home(true);
        echo '</br>';
        echo Url::current();
        echo '</br>';
        echo Url::to(['index']);
        echo '</br>';
    }

    public function actionCk()
    {
        //第一种添加cookie方式
//        $cookie = new \yii\web\Cookie();
//        $cookie->name = 'ck_name';
//        $cookie->expire = time() + 86400;
//        $cookie->httpOnly = true;
//        $cookie->value = 'xzxz';
//
//      \Yii::$app->response->getCookies()->add($cookie) ;

//        第二种
//        $cookie = new \yii\web\Cookie([
//            'name' => 'ck_name',
//            'expire' => time() + 86400,
//            'httpOnly' => true,
//            'value' => 'xzxz',
//        ]);
//        \Yii::$app->response->getCookies()->add($cookie);

        $cookie = \Yii::$app->request->cookies;
//        dd($cookie->get('ck_name'));
//      dd($cookie->getValue('ck_name'));
        //dd($cookie->has('ck_name'));
        //dd($cookie->count());
        //$ck =   $cookie->getValue('ck_name');

        $session = \Yii::$app->session;
        //设置session
        $session->set('name','xzxz');
        $session->set('arr',[1,2,3]);
//        获取session
       var_dump($session->get('name')) ;
        var_dump($session->get('arr')) ;
//        删除session
        $session->removeAll();
        var_dump($session->get('name')) ;
        var_dump($session->get('arr')) ;


    }


}