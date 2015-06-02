<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\GlZone;

/**
 * GlZoneSearch represents the model behind the search form about `app\modules\setting\Models\GlZone`.
 */
class GlZoneSearch extends GlZone
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zone_id'], 'integer'],
            [['zone_name', 'zone_description'], 'safe'],
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
        $query = GlZone::find();

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
            'zone_id' => $this->zone_id,
        ]);

        $query->andFilterWhere(['like', 'zone_name', $this->zone_name])
            ->andFilterWhere(['like', 'zone_description', $this->zone_description]);

        return $dataProvider;
    }
}
