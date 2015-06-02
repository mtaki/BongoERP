<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\ChartOfAccount;

/**
 * ChartOfAccountSearch represents the model behind the search form about `app\modules\setting\Models\ChartOfAccount`.
 */
class ChartOfAccountSearch extends ChartOfAccount
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'account_no', 'gl_account_coa_parent_id'], 'integer'],
            [['account_name', 'status'], 'safe'],
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
        $query = ChartOfAccount::find();

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
            'account_no' => $this->account_no,
            'gl_account_coa_parent_id' => $this->gl_account_coa_parent_id,
        ]);

        $query->andFilterWhere(['like', 'account_name', $this->account_name])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
