<?php

use yii\db\Migration;

class m161111_172135_skill_to_employee_init extends Migration
{
    public function up()
    {
        $this->createTable(
            $this->table,
            [
                'id' => $this->primaryKey(),
                'employee_id' => $this->string()->notNull(),
                'skill_id' => $this->string()->notNull()
            ],
            'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
        );

        $this->createIndex('employee_skill_id', '{{%skill_to_employee}}', ['employee_id', 'skill_id'], true);
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

    public function getTable()
    {
        return \app\models\SkillToEmployee::tableName();
    }
}
