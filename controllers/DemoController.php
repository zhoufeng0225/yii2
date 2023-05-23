<?php
namespace  app\controllers;

use yii\web\Controller;
use Yii;
class DemoController extends Controller{

    public function actions()
    {
        return[
            'captcha'=>[
                'class'=>'yii\captcha\CaptchaAction',
                'maxLength'=>4,
                'minLength'=>4,
                'width'=>80,
                'height'=>40,
            ],
        ];
    }
    public function actionCode()
    {
        $model = new \app\models\Code();

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())){
            if($model->validate()){
                echo '验证成功';
                die;
            }else{
                dd($model->getErrors());
            }
        }

        return $this->render('code',['model'=>$model]);
    }

    public function actionCache()
    {
        $cache = \Yii::$app->cache;
//       添加一个缓存
//        $cache->add('name','xzxz');
//        var_dump($cache->get('name'));
//        添加多个缓存
//        $cache -> madd(['age'=>'9','sex'=>'man']);
//        var_dump($cache->mget(['name','age','sex']));
//        var_dump($cache->exists('name'));
//        删除一个缓存
//        $cache->delete('age');
 //       var_dump($cache->exists('age'));
//        清空缓存
      //  $cache->flush();
        var_dump($cache->mget(['name','age','sex']));
    }

    public function actionRbac ()
    {
        $auth = \Yii::$app->authManager;
//        var_dump($auth);
//        添加数据到auth-item表
//        $perm = $auth -> createPermission('demo-rbac');
//        $perm ->description = 'demo rbac';
//        $auth->add($perm);
//
//        $perm = $auth -> createPermission('demo-add');
//        $perm ->description = 'demo add';
//        $auth->add($perm);
//
//        $perm = $auth -> createPermission('demo-update');
//        $perm ->description = 'demo update';
//        $auth->add($perm);

//        读取节点
//        $onePerm = $auth->getPermission('demo-rbac');
//        var_dump($onePerm);
//        $allPerm = $auth->getPermissions();
//        var_dump($allPerm);
        
//        更新节点
//        $permName = 'demo-rbac';
//
//        $onePerm = $auth->getPermission($permName);
//        $onePerm->description = 'new demo rbac';
//
//        $auth->update($permName,$onePerm);

//        删除一个节点
//        $deletePerm = $auth ->getPermission('demo-rbac');
//        $auth->remove($deletePerm);
//        删除所有节点
//        $auth ->removeAllPermissions();



//        Role操作
//        添加一个 role
//        $oneRole = $auth -> createRole('super');
//        $oneRole ->description = 'new Role';
//        $auth->add($oneRole);
//      读取Role
//        $oneRole = $auth->getRole('super');
//        var_dump($oneRole);
//        var_dump($auth->getRoles());

//         更新Role
//        $roleName = 'super';
//
//        $oneRole = $auth->getRole($roleName);
//        $oneRole->description = 'update Role';
//
//        $auth->update($roleName,$oneRole);
////        删除一个Role
//        $deletePerm = $auth ->getRole('demo-rbac');
//        $auth->remove($deletePerm);
////        删除所有Role
//        $auth ->removeAllRoles();


//        将一个角色节点Permission添加到Role角色里

//        $rbacPerm = $auth->getPermission('demo-rbac');
//        $addPerm = $auth->getPermission('demo-add');
//        $superRole = $auth->getRole('super');
//        $auth->addChild($superRole,$rbacPerm);
//        $auth->addChild($superRole,$addPerm);

//        读取角色的权限节点
//        $roleName = 'super';
//       var_dump($auth->getPermissionsByRole($roleName));

//        判断是否有权限
//        $rbacPerm = $auth->getPermission('demo-rbac');
//        $updatePerm = $auth->getPermission('demo-update');
//        $superRole = $auth->getRole('super');
//
//        var_dump($auth->hasChild($superRole,$updatePerm));

//        remove角色权限
//        $superRole = $auth->getRole('super');
//        $rbacPerm = $auth->getPermission('demo-rbac');
//        $auth->removeChild($superRole,$rbacPerm);




//        $normalRole = $auth->getRole('normal');
//        $normalRole->description = 'normal Role';
//        $auth->update('normal',$normalRole);

//        用户 ,id为1
        $superRole = $auth->getRole('super');
        $normalRole = $auth->getRole('normal');
        $updatePerm = $auth ->getPermission('demo-update');
   //     $auth->addChild($superRole,$updatePerm);
//        $auth -> assign( $superRole , 1 );
//        $auth -> assign( $normalRole , 1 );
//        移出id
//        $auth->revoke($superRole,1);

//        用户id判断permission
//        var_dump($auth->getPermissionsByUser(1));

//        检查用户权限
//        var_dump($auth-> checkAccess(1,'demo-add'));

//添加自定义规则
//        $testRule = new \app\rbac\TestRule();
//       $auth->add($testRule);
        $oneRule = $auth->getRule('testRule');
       // var_dump($oneRule);


//
        $updatePerm = $auth->getPermission('demo-update');
        $updatePerm->ruleName = 'testRule';
        $auth->update('demo-update',$updatePerm);

        $findArticle =  ['article'=>['user_id'=>1]];
        var_dump($auth->checkAccess(1,'demo-update',$findArticle));
    }



}