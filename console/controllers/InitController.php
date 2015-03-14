<?php
/**
 * application Initialization
 *
 * User: zhuwj
 * Date: 3/14/15
 * Time: 11:32 AM
 */

namespace console\controllers;

use common\models\User;

class InitController extends \yii\console\Controller
{
    public function actionUser()
    {
        echo "Create init super user ... \n";
        $username = $this->prompt("input username :");
        $email = $this->prompt("input email for $username :");
        $password = $this->prompt("input password for $username :");

        $model = new User();
        $model->username=$username;
        $model->email=$email;
        $model->password=$password;

        if(!$model->save()){
            foreach($model->getErrors() as $errors){
                foreach($errors as $info){
                    echo "$info\n";
                }
            }
            return 0;
        }
        return 1;

    }
}