<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%employees_function}}".
 *
 * @property int $employees_function_id
 * @property string $function
 * @property string $date_creation
 * @property string $user_creation
 * @property string $status
 */
class EmployeesFunction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%employees_function}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['function', 'user_creation', 'status'], 'required'],
            [['date_creation'], 'safe'],
            [['function', 'user_creation'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'employees_function_id' => 'Employees Function ID',
            'function' => 'Function',
            'date_creation' => 'Date Creation',
            'user_creation' => 'User Creation',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EmployeesFunctionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EmployeesFunctionQuery(get_called_class());
    }
}
