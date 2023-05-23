<?php
namespace app\models;

use yii\base\Model;

class TestForm extends Model{
    public $username;
    public $password;
    public $email;

    public function rules(){
        return [
          [['username','password'],'required'],

        ];
    }
}
