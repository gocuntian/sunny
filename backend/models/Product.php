<?php
/**
 * Created by PhpStorm.
 * User: zhuwj
 * Date: 5/25/15
 * Time: 10:35 AM
 */

namespace backend\models;
use Yii;

class Product extends \kartik\tree\models\Tree{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * Override isDisabled method if you need as shown in the
     * example below. You can override similarly other methods
     * like isActive, isMovable etc.
     */
//    public function isDisabled()
//    {
//        if (Yii::$app->user->id !== 'admin') {
//            return true;
//        }
//        return parent::isDisabled();
//    }
}