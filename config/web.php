<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'r2DJjIvmoKRmu3J5H6UZ01IfFNrjk1sl',
            'enableCsrfValidation' => false,
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
//            'enableStrictParsing' => true, // с ним не работает сам сайт,видимо,нужны ещё rules
            'showScriptName' => true,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api',
                    'only' => ['get', 'post', 'delete'],
                    'pluralize' => true, // leading to the plural
                ],
                    'GET api/v1/books/list' => 'api',
                    'GET api/v1/books/<id>' => 'api/view',
                    'POST /api/v1/books/update/<id>' => 'api/update',
                    'DELETE api/v1/books/<id>' => 'api/delete'
//                    'extraPatterns' => [
//                        'DELETE {id}/preferred_url' => 'del-id', // 'xxxxx' refers to 'actionXxxxx'
//                        '<controller>/<action>' => '<controller>/<action>',
//                    ],

            ],
        ],
    ],
    'params' => $params,
];


if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
