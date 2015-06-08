<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\FixedAssetsMaster;

/**
 * FixedAssetsMasterSearch represents the model behind the search form about `app\modules\setting\Models\FixedAssetsMaster`.
 */
class FixedAssetsMasterSearch extends FixedAssetsMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['asset_id', 'asset_type', 'expected_life_years', 'supplier_vendor', 'cost_center'], 'integer'],
            [['barcode_no', 'manufacturer', 'accusation_date', 'assigned_to', 'asset_status', 'created_by', 'verified_by'], 'safe'],
            [['accuisation_price', 'current_value_dep', 'current_value_market', 'depreciation_rate'], 'number'],
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
        $query = FixedAssetsMaster::find();

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
            'asset_id' => $this->asset_id,
            'asset_type' => $this->asset_type,
            'accuisation_price' => $this->accuisation_price,
            'current_value_dep' => $this->current_value_dep,
            'current_value_market' => $this->current_value_market,
            'depreciation_rate' => $this->depreciation_rate,
            'expected_life_years' => $this->expected_life_years,
            'supplier_vendor' => $this->supplier_vendor,
            'accusation_date' => $this->accusation_date,
            'cost_center' => $this->cost_center,
        ]);

        $query->andFilterWhere(['like', 'barcode_no', $this->barcode_no])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'assigned_to', $this->assigned_to])
            ->andFilterWhere(['like', 'asset_status', $this->asset_status])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'verified_by', $this->verified_by]);

        return $dataProvider;
    }
}
