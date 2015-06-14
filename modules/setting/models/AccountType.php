<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_account_type".
 *
 * @property string $account_type_code
 * @property string $account_name
 * @property string $account_description
 * @property string $Is_DR_or_CR
 * @property double $default_DR_rate
 * @property double $default_CR_rate
 * @property string $Is_for_office_or_customer
 * @property double $Is_customer_balance
 * @property string $interest_applic_cycle
 * @property integer $gl_sub_head
 *
 * @property CbGlGam[] $cbGlGams
 */
class AccountType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_account_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_type_code', 'account_name', 'account_description', 'default_DR_rate', 'default_CR_rate', 'Is_for_office_or_customer', 'Is_customer_balance', 'interest_applic_cycle', 'gl_sub_head'], 'required'],
            [['default_DR_rate', 'default_CR_rate', 'Is_customer_balance'], 'number'],
            [['gl_sub_head'], 'integer'],
            [['account_type_code'], 'string', 'max' => 3],
            [['account_name'], 'string', 'max' => 70],
            [['account_description'], 'string', 'max' => 200],
            [['Is_DR_or_CR'], 'string', 'max' => 5],
            [['Is_for_office_or_customer', 'interest_applic_cycle'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_type_code' => Yii::t('app', 'Account Type Code'),
            'account_name' => Yii::t('app', 'Account Name'),
            'account_description' => Yii::t('app', 'Account Description'),
            'Is_DR_or_CR' => Yii::t('app', 'Is  Dr Or  Cr'),
            'default_DR_rate' => Yii::t('app', 'Default  Dr Rate'),
            'default_CR_rate' => Yii::t('app', 'Default  Cr Rate'),
            'Is_for_office_or_customer' => Yii::t('app', 'Is For Office Or Customer'),
            'Is_customer_balance' => Yii::t('app', 'Is Customer Balance'),
            'interest_applic_cycle' => Yii::t('app', 'Interest Applic Cycle'),
            'gl_sub_head' => Yii::t('app', 'Gl Sub Head'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGams()
    {
        return $this->hasMany(CbGlGam::className(), ['product_code' => 'account_type_code']);
    }

    /**
     * @inheritdoc
     * @return AccountTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccountTypeQuery(get_called_class());
    }
}
