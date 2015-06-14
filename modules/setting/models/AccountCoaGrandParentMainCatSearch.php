<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\AccountCoaGrandParentMainCat;

/**
 * AccountCoaGrandParentMainCatSearch represents the model behind the search form about `app\modules\setting\Models\AccountCoaGrandParentMainCat`.
 */
class AccountCoaGrandParentMainCatSearch extends AccountCoaGrandParentMainCat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['account_grand_parent_main_cat_code', 'grand_parent_main_category', 'Remarks'], 'safe'],
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
        $query = AccountCoaGrandParentMainCat::find();

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

        $query->andFilterWhere(['like', 'account_grand_parent_main_cat_code', $this->account_grand_parent_main_cat_code])
            ->andFilterWhere(['like', 'grand_parent_main_category', $this->grand_parent_main_category])
            ->andFilterWhere(['like', 'Remarks', $this->Remarks]);

        return $dataProvider;
    }
}
