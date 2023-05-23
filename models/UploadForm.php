<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model{
    public $imageFile;

    public function rules()
    {
       return[
           ['imageFile','file','skipOnEmpty'=>false,'extensions'=>'jpg,png'],
       ];
    }

    public function upload(){
        if($this->validate()){
            dd('../runtime/'.$this->$imageFile->baseName.'.'.$this->$imageFile);
           // $this->$imageFile->saveAs('../runtime/'.$this->$imageFile->baseName.'.'.$this->$imageFile->extension);
            return true;
        }
        return false;
    }
}