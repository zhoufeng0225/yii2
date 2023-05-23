<?php
namespace app\models;

use \yii\db\ActiveRecord;

class Article extends ActiveRecord{
    public static function tableName()
    {
        return 'Nation';
    }

    public function rules()
    {
        return[
            ['name' , 'required' , 'message'=>'用户名不得为空'],
            ['password' , 'required' , 'message'=>'密码不得为空'],
            ['name' , 'string' , 'min'=>2 ,'max'=>20 , 'tooShort'=>'用户名小于2位' , 'tooLong'=>'用户名大于20位', 'message'=>'不是string'],
            ['password', 'string' , 'min'=>6 ,'max'=>20 , 'tooShort'=>'密码小于6位' , 'tooLong'=>'密码大于20位', 'message'=>'不是string'],

           // ['password','compare','compareAttribute' => 'confirm','message'=>'密码不一致'],
    		//['confirm','required','message'=>'确认密码不能为空'],
        ];
    }
//在添加或者更新前
    public function beforeSave($insert){
        if (parent::beforeSave($insert)){

           if($this->isNewRecord){
               $this->count = 0;
           }else{
               $this->count = 1;
           }

           return true;
        }
        return false;

    }

}