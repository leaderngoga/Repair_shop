<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employees_function}}`.
 */
class m220103_154558_create_employees_function_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%employees_function}}', [
            'id' => $this->primaryKey(),
            'function' => $this->string(255)->notNull(),
            'date_creation' => $this->integer(10)->notNull()->foreignkey(user),
            'user_creation' => $this->string(50)->notNull()->foreignkey(user),
            'status' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employees_function}}');
    }
}
