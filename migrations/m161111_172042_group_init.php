<?php

use yii\db\Migration;

class m161111_172042_group_init extends Migration
{
    public function up()
    {
        $this->createTable(
            $this->table,
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
                'created_at' => $this->dateTime()->notNull(),
                'updated_at' => $this->dateTime()->notNull()
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
        return \app\models\Group::tableName();
    }
}
