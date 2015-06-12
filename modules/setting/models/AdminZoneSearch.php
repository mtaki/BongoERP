<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\AdminZone;

/**
 * AdminZoneSearch represents the model behind the search form about `app\modules\setting\models\AdminZone`.
 */
class AdminZoneSearch extends AdminZone
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zone_id'], 'integer'],
            [['zone_name'], 'safe'],
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
        $query = AdminZone::find();

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

        $query->andFilterWhere(['like', 'zone_name', $this->zone_name]);

        return $dataProvider;
    }
}
