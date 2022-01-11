<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $category_id
 * @property string $category_name
 * @property string $date_creation
 * @property string $user_creation
 * @property string $status
 * @property string $unity_price
 *
 * @property Products[] $products
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name', 'unity_price'], 'required'],
            [['date_creation', 'user_creation', 'status'], 'safe'],
            [['category_name', 'user_creation', 'unity_price'], 'string', 'max' => 30],
            [['status'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
            'date_creation' => 'Date Creation',
            'user_creation' => 'User Creation',
            'status' => 'Published',
            'unity_price' => 'Unity Price',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['category_id' => 'category_id']);
    }
}
