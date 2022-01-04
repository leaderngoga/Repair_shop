<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Cars]].
 *
 * @see \common\models\Cars
 */
class CarsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Cars[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Cars|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
