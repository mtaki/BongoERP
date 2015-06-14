<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\CbTransactionType;

/**
 * CbTransactionTypeSearch represents the model behind the search form about `app\modules\setting\models\CbTransactionType`.
 */
class CbTransactionTypeSearch extends CbTransactionType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trans_code', 'transaction_description', 'transaction_narrative'], 'safe'],
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
        $query = CbTransactionType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'trans_code', $this->trans_code])
            ->andFilterWhere(['like', 'transaction_description', $this->transaction_description])
            ->andFilterWhere(['like', 'transaction_narrative', $this->transaction_narrative]);

        return $dataProvider;
    }
}
