<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\Gam;

/**
 * GamSearch represents the model behind the search form about `app\modules\setting\Models\Gam`.
 */
class GamSearch extends Gam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_no', 'product_code', 'customer_no', 'account_name', 'branch_id', 'date_opened', 'balance_is_DR_CR', 'currency_code', 'freez_status', 'freez_date', 'account_close_flag', 'account_close_date', 'last_tran_date', 'source_of_funds', 'wtax_flag', 'source_account', 'IBAN', 'freez_reason', 'portifolio', 'documents_attached'], 'safe'],
            [['cleared_balance', 'DR_int_rate', 'CR_int_rate', 'accr_dr_amount', 'accr_cr_amount', 'applied_dr_int_todate', 'applied_cr_int_todate', 'total_dr_trans', 'total_cr_trans', 'wtax_percent', 'wtax_amount'], 'number'],
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
        $query = Gam::find();

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
            'date_opened' => $this->date_opened,
            'cleared_balance' => $this->cleared_balance,
            'DR_int_rate' => $this->DR_int_rate,
            'CR_int_rate' => $this->CR_int_rate,
            'accr_dr_amount' => $this->accr_dr_amount,
            'accr_cr_amount' => $this->accr_cr_amount,
            'applied_dr_int_todate' => $this->applied_dr_int_todate,
            'applied_cr_int_todate' => $this->applied_cr_int_todate,
            'freez_date' => $this->freez_date,
            'account_close_date' => $this->account_close_date,
            'last_tran_date' => $this->last_tran_date,
            'total_dr_trans' => $this->total_dr_trans,
            'total_cr_trans' => $this->total_cr_trans,
            'wtax_percent' => $this->wtax_percent,
            'wtax_amount' => $this->wtax_amount,
        ]);

        $query->andFilterWhere(['like', 'account_no', $this->account_no])
            ->andFilterWhere(['like', 'product_code', $this->product_code])
            ->andFilterWhere(['like', 'customer_no', $this->customer_no])
            ->andFilterWhere(['like', 'account_name', $this->account_name])
            ->andFilterWhere(['like', 'branch_id', $this->branch_id])
            ->andFilterWhere(['like', 'balance_is_DR_CR', $this->balance_is_DR_CR])
            ->andFilterWhere(['like', 'currency_code', $this->currency_code])
            ->andFilterWhere(['like', 'freez_status', $this->freez_status])
            ->andFilterWhere(['like', 'account_close_flag', $this->account_close_flag])
            ->andFilterWhere(['like', 'source_of_funds', $this->source_of_funds])
            ->andFilterWhere(['like', 'wtax_flag', $this->wtax_flag])
            ->andFilterWhere(['like', 'source_account', $this->source_account])
            ->andFilterWhere(['like', 'IBAN', $this->IBAN])
            ->andFilterWhere(['like', 'freez_reason', $this->freez_reason])
            ->andFilterWhere(['like', 'portifolio', $this->portifolio])
            ->andFilterWhere(['like', 'documents_attached', $this->documents_attached]);

        return $dataProvider;
    }
}
