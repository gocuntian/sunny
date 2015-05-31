<?php
namespace backend\controllers;

use Yii;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use common\models\customer\Customer;
use common\models\customer\CustomerRecord;
use common\models\customer\Phone;
use common\models\customer\PhoneRecord;
use Faker\Provider\cs_CZ\DateTime;
use common\models\LoginForm;
use slatiusa\nestable\Nestable;
/**
 * Site controller
 */
class ProductController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTestd()
    {
        echo 11231;
    }

}
