<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\EmployeesFunction]].
 *
 * @see \common\models\EmployeesFunction
 */
class EmployeesFunctionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\EmployeesFunction[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\EmployeesFunction|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
