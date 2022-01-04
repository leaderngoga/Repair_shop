<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%logs}}".
 *
 * @property int $log_id
 * @property string $event
 * @property string $Description
 * @property string $date_creation
 * @property string $user_creation
 */
class Logs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%logs}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event', 'Description', 'user_creation'], 'required'],
            [['date_creation'], 'safe'],
            [['event'], 'string', 'max' => 20],
            [['Description'], 'string', 'max' => 100],
            [['user_creation'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'event' => 'Event',
            'Description' => 'Description',
            'date_creation' => 'Date Creation',
            'user_creation' => 'User Creation',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\LogsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\LogsQuery(get_called_class());
    }
}
