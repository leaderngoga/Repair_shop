<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m220103_163105_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'product_name' => $this->string(255)->notNull(),
            'description' => $this->text()(),
            'category_id' => $this->integer(10)->notNull()->foreignkey(categories),
            'date_creation' => $this->integer(10),
            'user_creation' => $this->string(50),
            'status' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
