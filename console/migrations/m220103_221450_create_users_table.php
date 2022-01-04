<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m220103_221450_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'names' => $this->string(50)->notNull(),
            'username' => $this->string(10)->notNull(),
            'password' => $this->string(20)->notNull(),
            'user_level_id' => $this->integer(10)->notNull()->foreignkey(user_level),
            'date_creation' => $this->integer(10)->notNull()->foreignkey(user),
            'user_creation' => $this->srtring(50)->notNull()->foreignkey(user),
            'status' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
