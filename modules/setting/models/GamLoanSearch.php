<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\GamLoan;

/**
 * GamLoanSearch represents the model behind the search form about `app\modules\setting\Models\GamLoan`.
 */
class GamLoanSearch extends GamLoan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loan_account_no', 'disbursement_account', 'settlement_account', 'payment_source', 'ins_payment_method', 'nth', 'last_repayment_date', 'next_repayment_date', 'loan_status', 'npl_flag', 'npl_date', 'final_repay_date'], 'safe'],
            [['loan_processing_fee', 'disbursed_amount', 'periodic_payment', 'expected_interest', 'principal_in_arrear', 'interest_in_arrear', 'penalty_arrear', 'interest_in_suspense', 'principal_paid_todate', 'principal_remaining_todate', 'total_interest_paid_todate', 'ins_per_repayment', 'ins_due', 'ins_paid_todate', 'ins_arrears', 'ins_paid_back'], 'number'],
            [['no_of_repayments', 'loan_calc_method', 'dpd'], 'integer'],
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
        $query = GamLoan::find();

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
            'loan_processing_fee' => $this->loan_processing_fee,
            'disbursed_amount' => $this->disbursed_amount,
            'no_of_repayments' => $this->no_of_repayments,
            'periodic_payment' => $this->periodic_payment,
            'expected_interest' => $this->expected_interest,
            'principal_in_arrear' => $this->principal_in_arrear,
            'interest_in_arrear' => $this->interest_in_arrear,
            'penalty_arrear' => $this->penalty_arrear,
            'interest_in_suspense' => $this->interest_in_suspense,
            'loan_calc_method' => $this->loan_calc_method,
            'principal_paid_todate' => $this->principal_paid_todate,
            'principal_remaining_todate' => $this->principal_remaining_todate,
            'total_interest_paid_todate' => $this->total_interest_paid_todate,
            'ins_per_repayment' => $this->ins_per_repayment,
            'ins_due' => $this->ins_due,
            'ins_paid_todate' => $this->ins_paid_todate,
            'ins_arrears' => $this->ins_arrears,
            'ins_paid_back' => $this->ins_paid_back,
            'last_repayment_date' => $this->last_repayment_date,
            'dpd' => $this->dpd,
            'next_repayment_date' => $this->next_repayment_date,
            'npl_date' => $this->npl_date,
            'final_repay_date' => $this->final_repay_date,
        ]);

        $query->andFilterWhere(['like', 'loan_account_no', $this->loan_account_no])
            ->andFilterWhere(['like', 'disbursement_account', $this->disbursement_account])
            ->andFilterWhere(['like', 'settlement_account', $this->settlement_account])
            ->andFilterWhere(['like', 'payment_source', $this->payment_source])
            ->andFilterWhere(['like', 'ins_payment_method', $this->ins_payment_method])
            ->andFilterWhere(['like', 'nth', $this->nth])
            ->andFilterWhere(['like', 'loan_status', $this->loan_status])
            ->andFilterWhere(['like', 'npl_flag', $this->npl_flag]);

        return $dataProvider;
    }
}
