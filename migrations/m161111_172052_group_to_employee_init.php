<?php

use yii\db\Migration;

class m161111_172052_group_to_employee_init extends Migration
{
    public function up()
    {
        $this->createTable(
            $this->table,
            [
                'id' => $this->primaryKey(),
                'employee_id' => $this->string()->notNull(),
                'group_id' => $this->string()->notNull()
            ],
            'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
        );

        $this->createIndex('employee_group_id', '{{%group_to_employee}}', ['employee_id', 'group_id'], true);
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

    public function getTable()
    {
        return \app\models\GroupToEmployee::tableName();
    }
}
