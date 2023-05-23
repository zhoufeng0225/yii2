<?php
namespace app\models;

use \yii\db\ActiveRecord;

class Nation extends ActiveRecord{
//	public $name;
//	public $password;
//	public $confirm;
//    public $count;

	public static function tableName()
    {
        return 'Nation';
    }

//    public function rules(){
//    	return [
//    		['name','required','message'=>'用户名不能为空'],
//    		['password','required','message'=>'密码不能为空'],
//    		['password','compare','compareAttribute' => 'confirm','message'=>'密码不一致'],
//    		['confirm','required','message'=>'确认密码不能为空'],
//    		//[["name","password"],"string"]
//       	];
//    }


}