<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\CostCenter;

/**
 * CostCenterSearch represents the model behind the search form about `app\modules\setting\Models\CostCenter`.
 */
class CostCenterSearch extends CostCenter
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cost_center_id'], 'integer'],
            [['Cost_center_name', 'Cost_center_description', 'date_started', 'Status', 'Date_closed'], 'safe'],
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
        $query = CostCenter::find();

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
            'Cost_center_id' => $this->Cost_center_id,
            'date_started' => $this->date_started,
            'Date_closed' => $this->Date_closed,
        ]);

        $query->andFilterWhere(['like', 'Cost_center_name', $this->Cost_center_name])
            ->andFilterWhere(['like', 'Cost_center_description', $this->Cost_center_description])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
