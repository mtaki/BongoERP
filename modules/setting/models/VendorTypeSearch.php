<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\VendorType;

/**
 * VendorTypeSearch represents the model behind the search form about `app\modules\setting\models\VendorType`.
 */
class VendorTypeSearch extends VendorType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Vendor_type', 'vendor_description'], 'safe'],
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
        $query = VendorType::find();

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
        ]);

        $query->andFilterWhere(['like', 'Vendor_type', $this->Vendor_type])
            ->andFilterWhere(['like', 'vendor_description', $this->vendor_description]);

        return $dataProvider;
    }
}
