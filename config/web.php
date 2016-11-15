<?php

return [
    'id' => 'web',
    'bootstrap' => (YII_DEBUG ? ['debug'] : []),
    'modules' => [
        'debug' => 'yii\debug\Module'
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => '5mYeG5NVCDb4hO5OQ8cVwCAMEnmLVZ4p',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [

            ],
        ],
    ],
    'params' => []
];