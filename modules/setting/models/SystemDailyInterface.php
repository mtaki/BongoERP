<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_systm_core_gl_daily_interface".
 *
 * @property string $id
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
 * @property string $gl_account
 * @property string $Trans_Narative
 * @property string $Company_code
 * @property string $Cost_center
 * @property string $Transaction_status
 */
class SystemDailyInterface extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_systm_core_gl_daily_interface';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Doc_trans_date', 'Doc_post_date', 'Doc_period_month', 'Doc_period_year', 'Doc_Type', 'trans_type', 'Doc_currency', 'Tran_amount', 'Tran_amount_lcy', 'DR_CR_indicator', 'gl_account', 'Trans_Narative', 'Company_code', 'Cost_center', 'Transaction_status'], 'required'],
            [['Doc_trans_date', 'Doc_post_date'], 'safe'],
            [['Doc_period_month', 'Doc_period_year', 'trans_type'], 'integer'],
            [['Tran_amount', 'Tran_amount_lcy'], 'number'],
            [['Doc_Type', 'DR_CR_indicator'], 'string', 'max' => 2],
            [['Doc_currency'], 'string', 'max' => 3],
            [['gl_account'], 'string', 'max' => 6],
            [['Trans_Narative'], 'string', 'max' => 200],
            [['Company_code', 'Transaction_status'], 'string', 'max' => 10],
            [['Cost_center'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
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
            'Transaction_status' => Yii::t('app', 'Transaction Status'),
        ];
    }

    /**
     * @inheritdoc
     * @return SystemDailyInterfaceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SystemDailyInterfaceQuery(get_called_class());
    }
}
