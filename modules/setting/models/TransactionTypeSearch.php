<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\TransactionType;

/**
 * TransactionTypeSearch represents the model behind the search form about `app\modules\setting\models\TransactionType`.
 */
class TransactionTypeSearch extends TransactionType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tran_type_id'], 'integer'],
            [['trans_name', 'trans_type_description'], 'safe'],
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
        $query = TransactionType::find();

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
            'tran_type_id' => $this->tran_type_id,
        ]);

        $query->andFilterWhere(['like', 'trans_name', $this->trans_name])
            ->andFilterWhere(['like', 'trans_type_description', $this->trans_type_description]);

        return $dataProvider;
    }
}
