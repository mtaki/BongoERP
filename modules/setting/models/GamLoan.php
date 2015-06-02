<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_gam_loan".
 *
 * @property string $loan_account_no
 * @property string $disbursement_account
 * @property string $settlement_account
 * @property double $loan_processing_fee
 * @property double $disbursed_amount
 * @property integer $no_of_repayments
 * @property double $periodic_payment
 * @property double $expected_interest
 * @property string $payment_source
 * @property double $principal_in_arrear
 * @property double $interest_in_arrear
 * @property double $penalty_arrear
 * @property double $interest_in_suspense
 * @property integer $loan_calc_method
 * @property double $principal_paid_todate
 * @property double $principal_remaining_todate
 * @property double $total_interest_paid_todate
 * @property double $ins_per_repayment
 * @property double $ins_due
 * @property double $ins_paid_todate
 * @property string $ins_payment_method
 * @property double $ins_arrears
 * @property double $ins_paid_back
 * @property string $nth
 * @property string $last_repayment_date
 * @property integer $dpd
 * @property string $next_repayment_date
 * @property string $loan_status
 * @property string $npl_flag
 * @property string $npl_date
 * @property string $final_repay_date
 *
 * @property CbGlGam $loanAccountNo
 * @property CbGlGamLoanCalcMethods $loanCalcMethod
 * @property CbGlGamLoanCollateral[] $cbGlGamLoanCollaterals
 * @property CbGlGamLoanRepayShedule[] $cbGlGamLoanRepayShedules
 */
class GamLoan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_gam_loan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['loan_account_no', 'disbursement_account', 'settlement_account', 'loan_processing_fee', 'disbursed_amount', 'no_of_repayments', 'periodic_payment', 'expected_interest', 'payment_source', 'principal_in_arrear', 'interest_in_arrear', 'penalty_arrear', 'interest_in_suspense', 'total_interest_paid_todate', 'ins_per_repayment', 'ins_due', 'ins_paid_todate', 'ins_payment_method', 'ins_arrears', 'ins_paid_back', 'nth', 'last_repayment_date', 'dpd', 'next_repayment_date', 'loan_status', 'npl_flag', 'npl_date', 'final_repay_date'], 'required'],
            [['loan_processing_fee', 'disbursed_amount', 'periodic_payment', 'expected_interest', 'principal_in_arrear', 'interest_in_arrear', 'penalty_arrear', 'interest_in_suspense', 'principal_paid_todate', 'principal_remaining_todate', 'total_interest_paid_todate', 'ins_per_repayment', 'ins_due', 'ins_paid_todate', 'ins_arrears', 'ins_paid_back'], 'number'],
            [['no_of_repayments', 'loan_calc_method', 'dpd'], 'integer'],
            [['last_repayment_date', 'next_repayment_date', 'npl_date', 'final_repay_date'], 'safe'],
            [['loan_account_no', 'disbursement_account', 'settlement_account'], 'string', 'max' => 12],
            [['payment_source', 'nth'], 'string', 'max' => 10],
            [['ins_payment_method'], 'string', 'max' => 70],
            [['loan_status'], 'string', 'max' => 6],
            [['npl_flag'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loan_account_no' => Yii::t('app', 'Loan Account No'),
            'disbursement_account' => Yii::t('app', 'Disbursement Account'),
            'settlement_account' => Yii::t('app', 'Settlement Account'),
            'loan_processing_fee' => Yii::t('app', 'Loan Processing Fee'),
            'disbursed_amount' => Yii::t('app', 'Disbursed Amount'),
            'no_of_repayments' => Yii::t('app', 'No Of Repayments'),
            'periodic_payment' => Yii::t('app', 'Periodic Payment'),
            'expected_interest' => Yii::t('app', 'Expected Interest'),
            'payment_source' => Yii::t('app', 'Payment Source'),
            'principal_in_arrear' => Yii::t('app', 'Principal In Arrear'),
            'interest_in_arrear' => Yii::t('app', 'Interest In Arrear'),
            'penalty_arrear' => Yii::t('app', 'Penalty Arrear'),
            'interest_in_suspense' => Yii::t('app', 'Interest In Suspense'),
            'loan_calc_method' => Yii::t('app', 'Loan Calc Method'),
            'principal_paid_todate' => Yii::t('app', 'Principal Paid Todate'),
            'principal_remaining_todate' => Yii::t('app', 'Principal Remaining Todate'),
            'total_interest_paid_todate' => Yii::t('app', 'Total Interest Paid Todate'),
            'ins_per_repayment' => Yii::t('app', 'Ins Per Repayment'),
            'ins_due' => Yii::t('app', 'Ins Due'),
            'ins_paid_todate' => Yii::t('app', 'Ins Paid Todate'),
            'ins_payment_method' => Yii::t('app', 'Ins Payment Method'),
            'ins_arrears' => Yii::t('app', 'Ins Arrears'),
            'ins_paid_back' => Yii::t('app', 'Ins Paid Back'),
            'nth' => Yii::t('app', 'Nth'),
            'last_repayment_date' => Yii::t('app', 'Last Repayment Date'),
            'dpd' => Yii::t('app', 'Dpd'),
            'next_repayment_date' => Yii::t('app', 'Next Repayment Date'),
            'loan_status' => Yii::t('app', 'Loan Status'),
            'npl_flag' => Yii::t('app', 'Npl Flag'),
            'npl_date' => Yii::t('app', 'Npl Date'),
            'final_repay_date' => Yii::t('app', 'Final Repay Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoanAccountNo()
    {
        return $this->hasOne(CbGlGam::className(), ['account_no' => 'loan_account_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoanCalcMethod()
    {
        return $this->hasOne(CbGlGamLoanCalcMethods::className(), ['id' => 'loan_calc_method']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGamLoanCollaterals()
    {
        return $this->hasMany(CbGlGamLoanCollateral::className(), ['loan_account' => 'loan_account_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGamLoanRepayShedules()
    {
        return $this->hasMany(CbGlGamLoanRepayShedule::className(), ['loan_account' => 'loan_account_no']);
    }

    /**
     * @inheritdoc
     * @return GamLoanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GamLoanQuery(get_called_class());
    }
}
