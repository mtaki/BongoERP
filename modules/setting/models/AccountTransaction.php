<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_account_transaction".
 *
 * @property string $Document_no
 * @property string $Doc_trans_date
 * @property string $Doc_post_date
 * @property integer $Doc_period_month
 * @property integer $Doc_period_year
 * @property string $Doc_Type
 * @property integer $trans_type
 * @property string $Doc_currency
 * @property double $Tran_amount
 * @property double $Tran_amount_lcy
 * @property string $DR_CR_indicator
 * @property integer $gl_account
 * @property string $Trans_Narative
 * @property string $Company_code
 * @property string $Cost_center
 * @property string $Entered_by
 * @property string $Aproved_by
 * @property string $Transaction_status
 *
 * @property GlChartOfAccount $glAccount
 */
class AccountTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_account_transaction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Doc_trans_date', 'Doc_post_date', 'Doc_period_month', 'Doc_period_year', 'Doc_Type', 'trans_type', 'Doc_currency', 'Tran_amount', 'Tran_amount_lcy', 'DR_CR_indicator', 'Trans_Narative', 'Company_code', 'Cost_center', 'Entered_by', 'Aproved_by', 'Transaction_status'], 'required'],
            [['Doc_trans_date', 'Doc_post_date'], 'safe'],
            [['Doc_period_month', 'Doc_period_year', 'trans_type', 'gl_account'], 'integer'],
            [['Tran_amount', 'Tran_amount_lcy'], 'number'],
            [['Doc_Type', 'DR_CR_indicator'], 'string', 'max' => 2],
            [['Doc_currency'], 'string', 'max' => 3],
            [['Trans_Narative'], 'string', 'max' => 200],
            [['Company_code', 'Entered_by', 'Aproved_by', 'Transaction_status'], 'string', 'max' => 10],
            [['Cost_center'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Document_no' => Yii::t('app', 'Document No'),
            'Doc_trans_date' => Yii::t('app', 'Doc Trans Date'),
            'Doc_post_date' => Yii::t('app', 'Doc Post Date'),
            'Doc_period_month' => Yii::t('app', 'Doc Period Month'),
            'Doc_period_year' => Yii::t('app', 'Doc Period Year'),
            'Doc_Type' => Yii::t('app', 'Doc  Type'),
            'trans_type' => Yii::t('app', 'Trans Type'),
            'Doc_currency' => Yii::t('app', 'Doc Currency'),
            'Tran_amount' => Yii::t('app', 'Tran Amount'),
            'Tran_amount_lcy' => Yii::t('app', 'Tran Amount Lcy'),
            'DR_CR_indicator' => Yii::t('app', 'Dr  Cr Indicator'),
            'gl_account' => Yii::t('app', 'Gl Account'),
            'Trans_Narative' => Yii::t('app', 'Trans  Narative'),
            'Company_code' => Yii::t('app', 'Company Code'),
            'Cost_center' => Yii::t('app', 'Cost Center'),
            'Entered_by' => Yii::t('app', 'Entered By'),
            'Aproved_by' => Yii::t('app', 'Aproved By'),
            'Transaction_status' => Yii::t('app', 'Transaction Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccount()
    {
        return $this->hasOne(GlChartOfAccount::className(), ['id' => 'gl_account']);
    }

    /**
     * @inheritdoc
     * @return ApLpoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ApLpoQuery(get_called_class());
    }
}
