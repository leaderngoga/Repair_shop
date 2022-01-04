<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_level}}`.
 */
class m220103_220528_create_user_level_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_level}}', [
            'id' => $this->primaryKey(),
            'userlevel' => $this->string(10)->notNull(),
            'date_creation' => $this->integer(11),
            'user_creation' => $this->string(50),
            'status' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_level}}');
    }
}
