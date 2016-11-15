<?php

$now = new \yii\db\Expression('NOW()');

return array_map(function ($v) use ($now) {
    return [
        'name'=>'Skill ' . $v,
        'created_at'=>$now,
        'updated_at'=>$now,
    ];
}, range('A', 'C'));