<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $car_id
 * @property string $plate_number
 * @property string $user_creation
 * @property string $date_creation
 * @property string $status
 *
 * @property StockRecord[] $stockRecords
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plate_number', 'user_creation', 'status'], 'required'],
            [['date_creation'], 'safe'],
            [['plate_number', 'user_creation'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'car_id' => 'Car ID',
            'plate_number' => 'Plate Number',
            'user_creation' => 'User Creation',
            'date_creation' => 'Date Creation',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[StockRecords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStockRecords()
    {
        return $this->hasMany(StockRecord::className(), ['car_id' => 'car_id']);
    }
}
