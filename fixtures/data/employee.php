<?php

$now = new \yii\db\Expression('NOW()');

return array_map(function ($v) use ($now) {
    return [
        'name' => 'Employee ' . $v .' ('.Yii::$app->security->generateRandomString(10).')',
        'at_work' => rand(0, 1),
        'created_at' => $now,
        'updated_at' => $now,
    ];
}, range(1, 6));