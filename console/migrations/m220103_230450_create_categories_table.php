<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m220103_230450_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey(),
            'category_name' => $this->string(255)->notNull(),
            'date_creation' => $this->integer(11),
            'user_creation' => $this->string(10),
            'status' => $this->string(50)->notNull(),
            'unity_price' => $this->integer(50)->notNull(),
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
