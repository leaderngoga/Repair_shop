<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m220110_105828_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'category_name' => $this->string(255)->notNull(),
            'date_creation' => $this->integer(10),
            'user_creation' => $this->string(50),
            'status' => $this->string(255)->notNull(),
            'unity_price' => $this->integer(20)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categories}}');
    }
}
