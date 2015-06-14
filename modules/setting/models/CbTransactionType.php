<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_transaction_types".
 *
 * @property string $trans_code
 * @property string $transaction_description
 * @property string $transaction_narrative
 */
class CbTransactionType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_transaction_types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trans_code', 'transaction_description', 'transaction_narrative'], 'required'],
            [['trans_code'], 'string', 'max' => 3],
            [['transaction_description'], 'string', 'max' => 20],
            [['transaction_narrative'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trans_code' => Yii::t('app', 'Trans Code'),
            'transaction_description' => Yii::t('app', 'Transaction Description'),
            'transaction_narrative' => Yii::t('app', 'Transaction Narrative'),
        ];
    }

    /**
     * @inheritdoc
     * @return CbTransactionTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CbTransactionTypeQuery(get_called_class());
    }
}
