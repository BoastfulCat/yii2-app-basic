<?php

$now = new \yii\db\Expression('NOW()');

return array_map(function ($v) use ($now) {
    return [
        'name'=>'Group ' . $v,
        'created_at'=>$now,
        'updated_at'=>$now,
    ];
}, range(1, 4));