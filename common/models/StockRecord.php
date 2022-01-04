<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%stock_record}}".
 *
 * @property int $stock_id
 * @property int $product_id
 * @property string $Quantity
 * @property string $total_price
 * @property int $car_id
 * @property string $description
 * @property int $employee_id
 * @property string $date_creation
 * @property string $user_creation
 * @property string $status
 *
 * @property Cars $car
 * @property Employees $employee
 * @property Products $product
 */
class StockRecord extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%stock_record}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'Quantity', 'total_price', 'car_id', 'description', 'employee_id', 'user_creation', 'status'], 'required'],
            [['product_id', 'car_id', 'employee_id'], 'integer'],
            [['date_creation'], 'safe'],
            [['Quantity', 'total_price', 'user_creation'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 50],
            [['car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::className(), 'targetAttribute' => ['car_id' => 'car_id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employees::className(), 'targetAttribute' => ['employee_id' => 'employee_id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'product_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stock_id' => 'Stock ID',
            'product_id' => 'Product ID',
            'Quantity' => 'Quantity',
            'total_price' => 'Total Price',
            'car_id' => 'Car ID',
            'description' => 'Description',
            'employee_id' => 'Employee ID',
            'date_creation' => 'Date Creation',
            'user_creation' => 'User Creation',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Car]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CarsQuery
     */
    public function getCar()
    {
        return $this->hasOne(Cars::className(), ['car_id' => 'car_id']);
    }

    /**
     * Gets query for [[Employee]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EmployeesQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employees::className(), ['employee_id' => 'employee_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\ProductsQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['product_id' => 'product_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\StockRecordQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\StockRecordQuery(get_called_class());
    }
}
