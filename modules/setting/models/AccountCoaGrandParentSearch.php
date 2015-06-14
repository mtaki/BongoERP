<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\AccountCoaGrandParent;

/**
 * AccountCoaGrandParentSearch represents the model behind the search form about `app\modules\setting\models\AccountCoaGrandParent`.
 */
class AccountCoaGrandParentSearch extends AccountCoaGrandParent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'coa_grand_parent_sub_cat_id'], 'integer'],
            [['account_grand_parent_code', 'grand_parent_name', 'Remarks'], 'safe'],
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
        $query = AccountCoaGrandParent::find();

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
            'coa_grand_parent_sub_cat_id' => $this->coa_grand_parent_sub_cat_id,
        ]);

        $query->andFilterWhere(['like', 'account_grand_parent_code', $this->account_grand_parent_code])
            ->andFilterWhere(['like', 'grand_parent_name', $this->grand_parent_name])
            ->andFilterWhere(['like', 'Remarks', $this->Remarks]);

        return $dataProvider;
    }
}
