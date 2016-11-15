<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class Employee extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'groups' => 'Group',
            'skills' => 'Skill',
            'at_work' => 'At work place',
        ];
    }

    public function getGroups(){
        return $this->hasMany(GroupToEmployee::className(),['employee_id'=>'id']);

        // or use viaTable method
        // return $this->hasMany(Group::className(),['id'=>'group_id'])->viaTable(GroupToEmployee::tableName(),['employee_id'=>'id']);
    }

    public function getSkills(){
        return $this->hasMany(SkillToEmployee::className(),['employee_id'=>'id']);

        // or use viaTable method
        // return $this->hasMany(Skill::className(),['id'=>'skill_id'])->viaTable(SkillToEmployee::tableName(),['employee_id'=>'id']);
    }
}



