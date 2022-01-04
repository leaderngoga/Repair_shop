<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stock_record}}`.
 */
class m220103_164140_create_stock_record_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stock_record}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(10)->notNull()->foreignkey(products),
            'quantity' => $this->string(5),
            'total_price' => $this->integer(50),
            'car_id' => $this->integer(50)->notNull()->foreignkey(cars),
            'description' => $this->text()(),
            'employee_id' => $this->integer(11)->notNull()->foreignkey(employees),
            'date_creation' => $this->integer(10)->foreignkey(user),
            'user_creation' => $this->string(50)->foreignkey(user),
            'status' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stock_record}}');
    }
}
