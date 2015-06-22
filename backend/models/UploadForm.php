<?php
/**
 * Created by PhpStorm.
 * User: zhuwj
 * Date: 6/21/15
 * Time: 5:54 PM
 */

namespace backend\models;


use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{

    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg'],
        ];
    }

    public function upload()
    {
        if($this->validate()){
            $this->imageFile->saveAs('images/'.$this->imageFile->baseName.'.'.$this->imageFile->extension);
            return true;
        }else{
            return false;
        }
    }
}