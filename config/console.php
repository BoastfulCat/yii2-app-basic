<?php

return [
    'id' => 'console',
    'controllerNamespace' => 'app\commands',
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'app\fixtures',
        ]
    ],
    'components' => [],
    'params' => []
];