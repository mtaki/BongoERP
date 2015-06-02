<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\LpoPurchaseTypeList;

/**
 * LpoPurchaseTypeListSearch represents the model behind the search form about `app\modules\setting\Models\LpoPurchaseTypeList`.
 */
class LpoPurchaseTypeListSearch extends LpoPurchaseTypeList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'purchase_type_id', 'sub_gl', 'coa_id'], 'integer'],
            [['name'], 'safe'],
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
        $query = LpoPurchaseTypeList::find();

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
            'purchase_type_id' => $this->purchase_type_id,
            'sub_gl' => $this->sub_gl,
            'coa_id' => $this->coa_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
