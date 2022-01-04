<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%products}}".
 *
 * @property int $product_id
 * @property string $product_name
 * @property string $Description
 * @property int $category_id
 * @property string $date_creation
 * @property string $user_creation
 * @property string $status
 *
 * @property Categories $category
 * @property StockRecord[] $stockRecords
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'Description', 'category_id', 'user_creation', 'status'], 'required'],
            [['category_id'], 'integer'],
            [['date_creation'], 'safe'],
            [['product_name', 'user_creation'], 'string', 'max' => 10],
            [['Description'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 50],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'Description' => 'Description',
            'category_id' => 'Category ID',
            'date_creation' => 'Date Creation',
            'user_creation' => 'User Creation',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CategoriesQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['category_id' => 'category_id']);
    }

    /**
     * Gets query for [[StockRecords]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\StockRecordQuery
     */
    public function getStockRecords()
    {
        return $this->hasMany(StockRecord::className(), ['product_id' => 'product_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ProductsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ProductsQuery(get_called_class());
    }
}
