<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cars}}`.
 */
class m220103_161146_create_cars_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cars}}', [
            'id' => $this->primaryKey(),
            'plate_number' => $this->string(10)->notNull(),
            'user_creation' => $this->string(50)->notNull()->foreignkey(user),
            'date_creation' => $this->integer(10)->notNull()->foreignkey(user),
            'status' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cars}}');
    }
}
