<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        /*'urlManager' => [
           'enablePrettyUrl' => true,
           'enableStrictParsing' => true,
           'showScriptName' => false,
           'rules' => [
               [
                   '<controller:(section|comment|user)>/<action:(create|test|account|info|info1|old|old001|download)>' => '<controller>/<action>',
                   '<controller:(section|comment|user)>/<id:\w+>/<action:(update|delete|account)>' => '<controller>/<action>',
                   '<controller:(section|comment|user)>/<id:\w+>' => '<controller>/view',
                   '<controller:(section|comment|user)>' => '<controller>/index',

               ],
           ],
       ],*/
    ],
    'params' => $params,
];
