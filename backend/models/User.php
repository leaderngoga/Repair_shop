<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $user_id
 * @property string $names
 * @property string $username
 * @property string $password
 * @property int $user_level_id
 * @property string $date_creation
 * @property string $user_creation
 * @property string $status
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['names', 'username', 'password', 'user_level_id', 'user_creation', 'status'], 'required'],
            [['user_level_id'], 'integer'],
            [['date_creation'], 'safe'],
            [['names', 'username', 'password', 'user_creation'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 50],
            [['user_level_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'names' => 'Names',
            'username' => 'Username',
            'password' => 'Password',
            'user_level_id' => 'User Level ID',
            'date_creation' => 'Date Creation',
            'user_creation' => 'User Creation',
            'status' => 'Status',
        ];
    }
}
