<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_deb_cred_paymentmethod".
 *
 * @property integer $paymentid
 * @property string $paymentname
 * @property integer $paymenttype
 * @property integer $receipttype
 * @property integer $usepreprintedstationery
 * @property integer $opencashdrawer
 */
class DbCrPaymentmethod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_deb_cred_paymentmethod';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['paymenttype', 'receipttype', 'usepreprintedstationery', 'opencashdrawer'], 'integer'],
            [['paymentname'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'paymentid' => Yii::t('app', 'Paymentid'),
            'paymentname' => Yii::t('app', 'Paymentname'),
            'paymenttype' => Yii::t('app', 'Paymenttype'),
            'receipttype' => Yii::t('app', 'Receipttype'),
            'usepreprintedstationery' => Yii::t('app', 'Usepreprintedstationery'),
            'opencashdrawer' => Yii::t('app', 'Opencashdrawer'),
        ];
    }

    /**
     * @inheritdoc
     * @return DbCrPaymentmethodQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DbCrPaymentmethodQuery(get_called_class());
    }
}
