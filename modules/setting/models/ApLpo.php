<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_ap_lpo".
 *
 * @property integer $id
 * @property string $lpo_number
 * @property integer $vendor_master_id
 * @property string $lpo_date
 * @property integer $purchase_type
 * @property string $created_by
 * @property string $created_date
 * @property string $released_by
 * @property string $released_date
 * @property string $goods_received
 * @property string $receipt_date
 * @property string $received_by
 * @property string $lpo_match_invoice
 * @property string $payment_done
 * @property string $payment_date
 * @property double $Total_amount
 */
class ApLpo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_ap_lpo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lpo_number', 'vendor_master_id', 'lpo_date', 'purchase_type', 'created_by', 'created_date', 'released_by', 'released_date', 'goods_received', 'receipt_date', 'received_by', 'lpo_match_invoice', 'payment_done', 'payment_date', 'Total_amount'], 'required'],
            [['vendor_master_id', 'purchase_type'], 'integer'],
            [['lpo_date', 'released_date', 'receipt_date', 'payment_date'], 'safe'],
            [['Total_amount'], 'number'],
            [['lpo_number', 'created_by', 'created_date', 'released_by', 'received_by'], 'string', 'max' => 10],
            [['goods_received', 'lpo_match_invoice', 'payment_done'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'lpo_number' => Yii::t('app', 'Lpo Number'),
            'vendor_master_id' => Yii::t('app', 'Vendor Master ID'),
            'lpo_date' => Yii::t('app', 'Lpo Date'),
            'purchase_type' => Yii::t('app', 'Purchase Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_date' => Yii::t('app', 'Created Date'),
            'released_by' => Yii::t('app', 'Released By'),
            'released_date' => Yii::t('app', 'Released Date'),
            'goods_received' => Yii::t('app', 'Goods Received'),
            'receipt_date' => Yii::t('app', 'Receipt Date'),
            'received_by' => Yii::t('app', 'Received By'),
            'lpo_match_invoice' => Yii::t('app', 'Lpo Match Invoice'),
            'payment_done' => Yii::t('app', 'Payment Done'),
            'payment_date' => Yii::t('app', 'Payment Date'),
            'Total_amount' => Yii::t('app', 'Total Amount'),
        ];
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
