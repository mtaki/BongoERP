<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_debtor_creditor_transactxn".
 *
 * @property integer $Tran_id
 * @property string $tran_date
 * @property string $vendor_customer_no
 * @property string $park_date
 * @property string $post_date
 * @property string $parked_by
 * @property string $posted_by
 * @property string $trans_status
 * @property string $tran_refference
 * @property double $trans_amount
 * @property string $trans_currency
 * @property string $cr_dr_indicator
 * @property string $gl_account
 * @property string $inv_number
 * @property integer $payment_method
 */
class DbCrTrans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_debtor_creditor_transactxn';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tran_id', 'tran_date', 'vendor_customer_no', 'park_date', 'post_date', 'parked_by', 'posted_by', 'trans_status', 'tran_refference', 'trans_amount', 'trans_currency', 'cr_dr_indicator', 'gl_account', 'inv_number', 'payment_method'], 'required'],
            [['Tran_id', 'payment_method'], 'integer'],
            [['tran_date', 'park_date', 'post_date'], 'safe'],
            [['trans_amount'], 'number'],
            [['vendor_customer_no'], 'string', 'max' => 12],
            [['parked_by', 'posted_by', 'trans_status', 'inv_number'], 'string', 'max' => 10],
            [['tran_refference'], 'string', 'max' => 50],
            [['trans_currency'], 'string', 'max' => 3],
            [['cr_dr_indicator', 'gl_account'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Tran_id' => Yii::t('app', 'Tran ID'),
            'tran_date' => Yii::t('app', 'Tran Date'),
            'vendor_customer_no' => Yii::t('app', 'Vendor Customer No'),
            'park_date' => Yii::t('app', 'Park Date'),
            'post_date' => Yii::t('app', 'Post Date'),
            'parked_by' => Yii::t('app', 'Parked By'),
            'posted_by' => Yii::t('app', 'Posted By'),
            'trans_status' => Yii::t('app', 'Trans Status'),
            'tran_refference' => Yii::t('app', 'Tran Refference'),
            'trans_amount' => Yii::t('app', 'Trans Amount'),
            'trans_currency' => Yii::t('app', 'Trans Currency'),
            'cr_dr_indicator' => Yii::t('app', 'Cr Dr Indicator'),
            'gl_account' => Yii::t('app', 'Gl Account'),
            'inv_number' => Yii::t('app', 'Inv Number'),
            'payment_method' => Yii::t('app', 'Payment Method'),
        ];
    }

    /**
     * @inheritdoc
     * @return DbCrTransQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DbCrTransQuery(get_called_class());
    }
}
