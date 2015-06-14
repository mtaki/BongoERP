<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_xrate_tbl".
 *
 * @property string $currency_code
 * @property double $exchange_rate
 * @property double $rate_decimal
 */
class CbXrate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_xrate_tbl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency_code', 'exchange_rate', 'rate_decimal'], 'required'],
            [['exchange_rate', 'rate_decimal'], 'number'],
            [['currency_code'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'currency_code' => Yii::t('app', 'Currency Code'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'rate_decimal' => Yii::t('app', 'Rate Decimal'),
        ];
    }

    /**
     * @inheritdoc
     * @return CbXrateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CbXrateQuery(get_called_class());
    }
}
