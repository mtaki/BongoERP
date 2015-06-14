<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\CbXrate;

/**
 * CbXrateSearch represents the model behind the search form about `app\modules\setting\models\CbXrate`.
 */
class CbXrateSearch extends CbXrate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency_code'], 'safe'],
            [['exchange_rate', 'rate_decimal'], 'number'],
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
        $query = CbXrate::find();

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
            'exchange_rate' => $this->exchange_rate,
            'rate_decimal' => $this->rate_decimal,
        ]);

        $query->andFilterWhere(['like', 'currency_code', $this->currency_code]);

        return $dataProvider;
    }
}
