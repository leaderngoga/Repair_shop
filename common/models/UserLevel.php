<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_level}}".
 *
 * @property int $user_level_id
 * @property string $userlevel
 * @property string $date_creation
 * @property string $user_creation
 * @property string $status
 */
class UserLevel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user_level}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userlevel', 'user_creation', 'status'], 'required'],
            [['date_creation'], 'safe'],
            [['userlevel', 'user_creation'], 'string', 'max' => 10],
            [['status'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_level_id' => 'User Level ID',
            'userlevel' => 'Userlevel',
            'date_creation' => 'Date Creation',
            'user_creation' => 'User Creation',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\UserLevelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\UserLevelQuery(get_called_class());
    }
}
