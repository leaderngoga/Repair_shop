<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%employees}}".
 *
 * @property int $employee_id
 * @property string $employee_name
 * @property int $employee_phone
 * @property int $Employees_function_id
 * @property string $user_creation
 * @property string $date_creation
 * @property string $status
 *
 * @property StockRecord[] $stockRecords
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%employees}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_name', 'employee_phone', 'Employees_function_id', 'user_creation', 'status'], 'required'],
            [['employee_phone', 'Employees_function_id'], 'integer'],
            [['date_creation'], 'safe'],
            [['employee_name', 'user_creation'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 50],
            [['Employees_function_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'employee_name' => 'Employee Name',
            'employee_phone' => 'Employee Phone',
            'Employees_function_id' => 'Employees Function ID',
            'user_creation' => 'User Creation',
            'date_creation' => 'Date Creation',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[StockRecords]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\StockRecordQuery
     */
    public function getStockRecords()
    {
        return $this->hasMany(StockRecord::className(), ['employee_id' => 'employee_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EmployeesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EmployeesQuery(get_called_class());
    }
}
