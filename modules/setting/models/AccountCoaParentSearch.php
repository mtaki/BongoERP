<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\AccountCoaParent;

/**
 * AccountCoaParentSearch represents the model behind the search form about `app\modules\setting\Models\AccountCoaParent`.
 */
class AccountCoaParentSearch extends AccountCoaParent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gl_account_coa_grand_parent_id'], 'integer'],
            [['account_parent_code', 'parent_name', 'Remarks'], 'safe'],
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
        $query = AccountCoaParent::find();

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
            'gl_account_coa_grand_parent_id' => $this->gl_account_coa_grand_parent_id,
        ]);

        $query->andFilterWhere(['like', 'account_parent_code', $this->account_parent_code])
            ->andFilterWhere(['like', 'parent_name', $this->parent_name])
            ->andFilterWhere(['like', 'Remarks', $this->Remarks]);

        return $dataProvider;
    }
}
