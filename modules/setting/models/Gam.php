<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_gam".
 *
 * @property string $account_no
 * @property string $product_code
 * @property string $customer_no
 * @property string $account_name
 * @property string $branch_id
 * @property string $date_opened
 * @property string $balance_is_DR_CR
 * @property double $cleared_balance
 * @property double $DR_int_rate
 * @property double $CR_int_rate
 * @property string $currency_code
 * @property double $accr_dr_amount
 * @property double $accr_cr_amount
 * @property double $applied_dr_int_todate
 * @property double $applied_cr_int_todate
 * @property string $freez_status
 * @property string $freez_date
 * @property string $account_close_flag
 * @property string $account_close_date
 * @property string $last_tran_date
 * @property double $total_dr_trans
 * @property double $total_cr_trans
 * @property string $source_of_funds
 * @property string $wtax_flag
 * @property double $wtax_percent
 * @property double $wtax_amount
 * @property string $source_account
 * @property string $IBAN
 * @property string $freez_reason
 * @property string $portifolio
 * @property string $documents_attached
 *
 * @property CbGlBranch $branch
 * @property CbCrmCustomerMaster $customerNo
 * @property CbGlAccountType $productCode
 * @property CbGlGamContribution $cbGlGamContribution
 * @property CbGlGamLoan $cbGlGamLoan
 * @property CbGlGamShareMaster $cbGlGamShareMaster
 * @property CbGlGamTransAccount $cbGlGamTransAccount
 * @property CbGlGamTranx[] $cbGlGamTranxes
 */
class Gam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_gam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_no', 'customer_no', 'account_name', 'branch_id', 'date_opened', 'currency_code', 'applied_dr_int_todate', 'applied_cr_int_todate', 'freez_status', 'freez_date', 'account_close_flag', 'account_close_date', 'last_tran_date', 'total_dr_trans', 'total_cr_trans', 'source_of_funds', 'wtax_flag', 'source_account', 'IBAN', 'freez_reason', 'portifolio', 'documents_attached'], 'required'],
            [['date_opened', 'freez_date', 'account_close_date', 'last_tran_date'], 'safe'],
            [['cleared_balance', 'DR_int_rate', 'CR_int_rate', 'accr_dr_amount', 'accr_cr_amount', 'applied_dr_int_todate', 'applied_cr_int_todate', 'total_dr_trans', 'total_cr_trans', 'wtax_percent', 'wtax_amount'], 'number'],
            [['freez_reason'], 'string'],
            [['account_no', 'source_account', 'IBAN'], 'string', 'max' => 12],
            [['product_code', 'branch_id', 'currency_code'], 'string', 'max' => 3],
            [['customer_no'], 'string', 'max' => 7],
            [['account_name'], 'string', 'max' => 50],
            [['balance_is_DR_CR'], 'string', 'max' => 20],
            [['freez_status', 'wtax_flag'], 'string', 'max' => 10],
            [['account_close_flag'], 'string', 'max' => 6],
            [['source_of_funds', 'documents_attached'], 'string', 'max' => 100],
            [['portifolio'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_no' => Yii::t('app', 'Account No'),
            'product_code' => Yii::t('app', 'Product Code'),
            'customer_no' => Yii::t('app', 'Customer No'),
            'account_name' => Yii::t('app', 'Account Name'),
            'branch_id' => Yii::t('app', 'Branch ID'),
            'date_opened' => Yii::t('app', 'Date Opened'),
            'balance_is_DR_CR' => Yii::t('app', 'Balance Is  Dr  Cr'),
            'cleared_balance' => Yii::t('app', 'Cleared Balance'),
            'DR_int_rate' => Yii::t('app', 'Dr Int Rate'),
            'CR_int_rate' => Yii::t('app', 'Cr Int Rate'),
            'currency_code' => Yii::t('app', 'Currency Code'),
            'accr_dr_amount' => Yii::t('app', 'Accr Dr Amount'),
            'accr_cr_amount' => Yii::t('app', 'Accr Cr Amount'),
            'applied_dr_int_todate' => Yii::t('app', 'Applied Dr Int Todate'),
            'applied_cr_int_todate' => Yii::t('app', 'Applied Cr Int Todate'),
            'freez_status' => Yii::t('app', 'Freez Status'),
            'freez_date' => Yii::t('app', 'Freez Date'),
            'account_close_flag' => Yii::t('app', 'Account Close Flag'),
            'account_close_date' => Yii::t('app', 'Account Close Date'),
            'last_tran_date' => Yii::t('app', 'Last Tran Date'),
            'total_dr_trans' => Yii::t('app', 'Total Dr Trans'),
            'total_cr_trans' => Yii::t('app', 'Total Cr Trans'),
            'source_of_funds' => Yii::t('app', 'Source Of Funds'),
            'wtax_flag' => Yii::t('app', 'Wtax Flag'),
            'wtax_percent' => Yii::t('app', 'Wtax Percent'),
            'wtax_amount' => Yii::t('app', 'Wtax Amount'),
            'source_account' => Yii::t('app', 'Source Account'),
            'IBAN' => Yii::t('app', 'Iban'),
            'freez_reason' => Yii::t('app', 'Freez Reason'),
            'portifolio' => Yii::t('app', 'Portifolio'),
            'documents_attached' => Yii::t('app', 'Documents Attached'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(CbGlBranch::className(), ['branch_no' => 'branch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerNo()
    {
        return $this->hasOne(CbCrmCustomerMaster::className(), ['cust_no' => 'customer_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductCode()
    {
        return $this->hasOne(CbGlAccountType::className(), ['account_type_code' => 'product_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGamContribution()
    {
        return $this->hasOne(CbGlGamContribution::className(), ['account_no' => 'account_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGamLoan()
    {
        return $this->hasOne(CbGlGamLoan::className(), ['loan_account_no' => 'account_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGamShareMaster()
    {
        return $this->hasOne(CbGlGamShareMaster::className(), ['account_no' => 'account_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGamTransAccount()
    {
        return $this->hasOne(CbGlGamTransAccount::className(), ['account_no' => 'account_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGamTranxes()
    {
        return $this->hasMany(CbGlGamTranx::className(), ['trans_account' => 'account_no']);
    }

    /**
     * @inheritdoc
     * @return GamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GamQuery(get_called_class());
    }
}
