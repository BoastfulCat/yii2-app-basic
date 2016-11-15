<?php

use yii\db\Migration;

class m161111_152340_employee_init extends Migration
{
    public function up()
    {
        $this->createTable(
            $this->table,
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
                'at_work' => $this->smallInteger(1)->defaultValue(1),
                'created_at' => $this->dateTime()->notNull(),
                'updated_at' => $this->dateTime()->notNull(),
            ],
            'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB'
        );
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

    public function getTable()
    {
        return \app\models\Employee::tableName();
    }
}
