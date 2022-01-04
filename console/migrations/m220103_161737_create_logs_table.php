<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%logs}}`.
 */
class m220103_161737_create_logs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%logs}}', [
            'id' => $this->primaryKey(),
            'event' => $this->string(255)->notNull(),
            'description' => $this->textphp (),
            'date_creation' => $this->integer(10)->foreignkey(user),
            'user_creation' => $this->string(50)->foreignkey(user),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%logs}}');
    }
}
