<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\GamContribution;

/**
 * GamContributionSearch represents the model behind the search form about `app\modules\setting\Models\GamContribution`.
 */
class GamContributionSearch extends GamContribution
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_no', 'customer_id', 'start_date', 'contribution_source'], 'safe'],
            [['monthly_contribution', 'cumulative_contribution'], 'number'],
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
        $query = GamContribution::find();

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
            'monthly_contribution' => $this->monthly_contribution,
            'cumulative_contribution' => $this->cumulative_contribution,
            'start_date' => $this->start_date,
        ]);

        $query->andFilterWhere(['like', 'account_no', $this->account_no])
            ->andFilterWhere(['like', 'customer_id', $this->customer_id])
            ->andFilterWhere(['like', 'contribution_source', $this->contribution_source]);

        return $dataProvider;
    }
}
