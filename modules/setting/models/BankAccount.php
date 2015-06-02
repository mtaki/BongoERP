<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_bank_accounts".
 *
 * @property string $bank_id
 * @property string $bank_name
 * @property string $bank_address
 * @property string $bank_account
 * @property string $account_name
 * @property integer $gl_account_affecting
 * @property string $currency
 * @property string $default_inv_currency
 */
class BankAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_bank_accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bank_id', 'bank_name', 'bank_address', 'bank_account', 'account_name', 'gl_account_affecting', 'currency', 'default_inv_currency'], 'required'],
            [['bank_address'], 'string'],
            [['gl_account_affecting'], 'integer'],
            [['bank_id'], 'string', 'max' => 10],
            [['bank_name'], 'string', 'max' => 100],
            [['bank_account'], 'string', 'max' => 15],
            [['account_name'], 'string', 'max' => 20],
            [['currency', 'default_inv_currency'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bank_id' => Yii::t('app', 'Bank ID'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'bank_address' => Yii::t('app', 'Bank Address'),
            'bank_account' => Yii::t('app', 'Bank Account'),
            'account_name' => Yii::t('app', 'Account Name'),
            'gl_account_affecting' => Yii::t('app', 'Gl Account Affecting'),
            'currency' => Yii::t('app', 'Currency'),
            'default_inv_currency' => Yii::t('app', 'Default Inv Currency'),
        ];
    }

    /**
     * @inheritdoc
     * @return BankAccountQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BankAccountQuery(get_called_class());
    }
}
