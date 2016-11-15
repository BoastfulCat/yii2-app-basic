<?php

namespace app\models;

use yii\db\ActiveRecord;

class GroupToEmployee extends ActiveRecord
{
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

}



