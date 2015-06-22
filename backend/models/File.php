<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "file".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property string $path
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['url'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['name',  'path'], 'string', 'max' => 255]
        ];
    }

    public function upload()
    {
        if($this->validate()){
            $this->url->saveAs(substr(Yii::$app->getBasePath(),0,sizeof(Yii::$app->getBasePath())-9).'/images/'.$this->url->baseName.'.'.$this->url->extension);
            return true;
        }else{
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'url' => Yii::t('app', 'Url'),
            'path' => Yii::t('app', 'Path'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
