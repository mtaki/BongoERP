<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\ApLpo;

/**
 * ApLpoSearch represents the model behind the search form about `app\modules\setting\models\ApLpo`.
 */
class ApLpoSearch extends ApLpo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vendor_master_id', 'purchase_type'], 'integer'],
            [['lpo_number', 'lpo_date', 'created_by', 'created_date', 'released_by', 'released_date', 'goods_received', 'receipt_date', 'received_by', 'lpo_match_invoice', 'payment_done', 'payment_date'], 'safe'],
            [['Total_amount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = ApLpo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'vendor_master_id' => $this->vendor_master_id,
            'lpo_date' => $this->lpo_date,
            'purchase_type' => $this->purchase_type,
            'released_date' => $this->released_date,
            'receipt_date' => $this->receipt_date,
            'payment_date' => $this->payment_date,
            'Total_amount' => $this->Total_amount,
        ]);

        $query->andFilterWhere(['like', 'lpo_number', $this->lpo_number])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'created_date', $this->created_date])
            ->andFilterWhere(['like', 'released_by', $this->released_by])
            ->andFilterWhere(['like', 'goods_received', $this->goods_received])
            ->andFilterWhere(['like', 'received_by', $this->received_by])
            ->andFilterWhere(['like', 'lpo_match_invoice', $this->lpo_match_invoice])
            ->andFilterWhere(['like', 'payment_done', $this->payment_done]);

        return $dataProvider;
    }
}
