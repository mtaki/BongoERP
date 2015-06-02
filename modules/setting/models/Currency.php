<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_currence".
 *
 * @property string $currency_code
 * @property string $currency_country
 * @property string $currency_name
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_currence';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency_code', 'currency_country', 'currency_name'], 'required'],
            [['currency_code'], 'string', 'max' => 3],
            [['currency_country', 'currency_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'currency_code' => Yii::t('app', 'Currency Code'),
            'currency_country' => Yii::t('app', 'Currency Country'),
            'currency_name' => Yii::t('app', 'Currency Name'),
        ];
    }

    /**
     * @inheritdoc
     * @return CurrencyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CurrencyQuery(get_called_class());
    }
}
