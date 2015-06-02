<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\LpoDetail;

/**
 * LpoDetailSearch represents the model behind the search form about `app\modules\setting\Models\LpoDetail`.
 */
class LpoDetailSearch extends LpoDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lpo_id', 'purchase_type_list_id', 'cost_center', 'correct_category'], 'integer'],
            [['quantity'], 'number'],
            [['manufacturer', 'released', 'like_invoice', 'received', 'payed', 'update_gl'], 'safe'],
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
        $query = LpoDetail::find();

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
            'lpo_id' => $this->lpo_id,
            'purchase_type_list_id' => $this->purchase_type_list_id,
            'cost_center' => $this->cost_center,
            'quantity' => $this->quantity,
            'correct_category' => $this->correct_category,
        ]);

        $query->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'released', $this->released])
            ->andFilterWhere(['like', 'like_invoice', $this->like_invoice])
            ->andFilterWhere(['like', 'received', $this->received])
            ->andFilterWhere(['like', 'payed', $this->payed])
            ->andFilterWhere(['like', 'update_gl', $this->update_gl]);

        return $dataProvider;
    }
}
