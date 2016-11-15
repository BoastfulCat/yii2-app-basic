<?php

namespace app\models;

use yii\db\ActiveRecord;

class SkillToEmployee extends ActiveRecord
{
    public function getSkill()
    {
        return $this->hasOne(Skill::className(), ['id' => 'skill_id']);
    }

    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }
}



