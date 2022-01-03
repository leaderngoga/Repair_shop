<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EmployeesFunction;

/**
 * EmployeesFunctionSearch represents the model behind the search form of `backend\models\EmployeesFunction`.
 */
class EmployeesFunctionSearch extends EmployeesFunction
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employees_function_id'], 'integer'],
            [['function', 'date_creation', 'user_creation', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = EmployeesFunction::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'employees_function_id' => $this->employees_function_id,
            'date_creation' => $this->date_creation,
        ]);

        $query->andFilterWhere(['like', 'function', $this->function])
            ->andFilterWhere(['like', 'user_creation', $this->user_creation])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
