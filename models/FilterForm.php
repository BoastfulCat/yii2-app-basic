<?php

namespace app\models;

use Yii;
use yii\base\Model;

class FilterForm extends Model
{
    public $name;
    public $group_id;
    public $skill_id;
    public $at_work;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['name', 'default'],
            [['group_id', 'skill_id'], 'number'],
            ['at_work', 'in', 'range' => [0, 1]],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'group_id' => 'Group',
            'skill_id' => 'Skill',
            'at_work' => 'At work place',
        ];
    }
}