<?php
/**
 * Created by PhpStorm.
 * User: zhuwj
 * Date: 4/6/15
 * Time: 10:29 AM
 */
//namespace backend\behavior;
class MyBehavior extends yii\base\Behavior
{

    public function events()
    {
        return [\yii\db\ActiveRecord::EVENT_BEFORE_VALIDATE => 'beforeValidate'];
    }

    public function beforeValidate($event)
    {

    }
}