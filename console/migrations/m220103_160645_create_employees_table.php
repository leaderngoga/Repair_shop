<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees}}`.
 */
class m220103_160645_create_employees_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employees}}', [
            'id' => $this->primaryKey(),
            'employee_name' => $this->string(50)->notNull(),
            'employee_phone' => $this->integer(11)->notNull(),
            'Employees_function_id' => $this->integer(11)->notNull()->foreignkey(employees_function),
            'user_creation' => $this->string(50)->foeignkey(user),
            'date_creation' => $this->integer(10)->foreignkey(user),
            'status' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employees}}');
    }
}
