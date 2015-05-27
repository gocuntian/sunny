<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property integer $section_id
 * @property integer $parent
 * @property integer $status
 * @property integer $thumbsup
 * @property integer $thumbsdown
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $key_word
 * @property string $title
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_id'], 'required'],
            [['section_id', 'parent', 'status', 'thumbsup', 'thumbsdown', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['content'], 'string'],
            [['key_word', 'title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'section_id' => Yii::t('app', 'Section ID'),
            'parent' => Yii::t('app', 'Parent'),
            'status' => Yii::t('app', 'Status'),
            'thumbsup' => Yii::t('app', 'Thumbsup'),
            'thumbsdown' => Yii::t('app', 'Thumbsdown'),
            'content' => Yii::t('app', '教程内容'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'key_word' => Yii::t('app', '关键字'),
            'title' => Yii::t('app', '标题'),
        ];
    }

    /**
     * @inheritdoc
     * @return CourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CourseQuery(get_called_class());
    }
}
