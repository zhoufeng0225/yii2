<?php
namespace app\models;
use \yii\db\ActiveRecord;
class Seek extends ActiveRecord{
    public static function  tableName(){
        return 'nation';
    }
    public function rules()
    {
      return[
          ['name','required','message'=>'用户名不得为空'],
          ['password','required','message'=>'密码不得为空'],
          ['name','string','min'=>2,'max'=>20,'tooShort'=>'用户名小于2位','tooLong'=>'用户名不得大于20位','message'=>'No String'],
          ['password','string','min'=>6,'max'=>20,'tooShort'=>'密码不得小于6位','tooLong'=>'密码不得大于20位','message'=>'No String'],
      ];
    }

}

