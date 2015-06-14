<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\AccountTransaction;

/**
 * AccountTransactionSearch represents the model behind the search form about `app\modules\setting\Models\AccountTransaction`.
 */
class AccountTransactionSearch extends AccountTransaction
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Document_no', 'Doc_period_month', 'Doc_period_year', 'trans_type', 'gl_account'], 'integer'],
            [['Doc_trans_date', 'Doc_post_date', 'Doc_Type', 'Doc_currency', 'DR_CR_indicator', 'Trans_Narative', 'Company_code', 'Cost_center', 'Entered_by', 'Aproved_by', 'Transaction_status'], 'safe'],
            [['Tran_amount', 'Tran_amount_lcy'], 'number'],
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
        $query = AccountTransaction::find();

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
            'Document_no' => $this->Document_no,
            'Doc_trans_date' => $this->Doc_trans_date,
            'Doc_post_date' => $this->Doc_post_date,
            'Doc_period_month' => $this->Doc_period_month,
            'Doc_period_year' => $this->Doc_period_year,
            'trans_type' => $this->trans_type,
            'Tran_amount' => $this->Tran_amount,
            'Tran_amount_lcy' => $this->Tran_amount_lcy,
            'gl_account' => $this->gl_account,
        ]);

        $query->andFilterWhere(['like', 'Doc_Type', $this->Doc_Type])
            ->andFilterWhere(['like', 'Doc_currency', $this->Doc_currency])
            ->andFilterWhere(['like', 'DR_CR_indicator', $this->DR_CR_indicator])
            ->andFilterWhere(['like', 'Trans_Narative', $this->Trans_Narative])
            ->andFilterWhere(['like', 'Company_code', $this->Company_code])
            ->andFilterWhere(['like', 'Cost_center', $this->Cost_center])
            ->andFilterWhere(['like', 'Entered_by', $this->Entered_by])
            ->andFilterWhere(['like', 'Aproved_by', $this->Aproved_by])
            ->andFilterWhere(['like', 'Transaction_status', $this->Transaction_status]);

        return $dataProvider;
    }
}
