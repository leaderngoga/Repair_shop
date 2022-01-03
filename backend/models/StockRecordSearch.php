<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StockRecord;

/**
 * StockRecordSearch represents the model behind the search form of `backend\models\StockRecord`.
 */
class StockRecordSearch extends StockRecord
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stock_id', 'product_id', 'car_id', 'employee_id'], 'integer'],
            [['Quantity', 'total_price', 'description', 'date_creation', 'user_creation', 'status'], 'safe'],
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
        $query = StockRecord::find();

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
            'stock_id' => $this->stock_id,
            'product_id' => $this->product_id,
            'car_id' => $this->car_id,
            'employee_id' => $this->employee_id,
            'date_creation' => $this->date_creation,
        ]);

        $query->andFilterWhere(['like', 'Quantity', $this->Quantity])
            ->andFilterWhere(['like', 'total_price', $this->total_price])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'user_creation', $this->user_creation])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
