<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_bank_acc_trans".
 *
 * @property string $banktransid
 * @property integer $type
 * @property string $transno
 * @property string $bankact
 * @property string $ref
 * @property double $amountcleared
 * @property double $exrate
 * @property double $functionalexrate
 * @property string $transdate
 * @property string $banktranstype
 * @property double $amount
 * @property string $currcode
 */
class BankAccTrans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_bank_acc_trans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'transno'], 'integer'],
            [['amountcleared', 'exrate', 'functionalexrate', 'amount'], 'number'],
            [['transdate'], 'safe'],
            [['bankact'], 'string', 'max' => 20],
            [['ref'], 'string', 'max' => 50],
            [['banktranstype'], 'string', 'max' => 30],
            [['currcode'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banktransid' => Yii::t('app', 'Banktransid'),
            'type' => Yii::t('app', 'Type'),
            'transno' => Yii::t('app', 'Transno'),
            'bankact' => Yii::t('app', 'Bankact'),
            'ref' => Yii::t('app', 'Ref'),
            'amountcleared' => Yii::t('app', 'Amountcleared'),
            'exrate' => Yii::t('app', 'Exrate'),
            'functionalexrate' => Yii::t('app', 'Functionalexrate'),
            'transdate' => Yii::t('app', 'Transdate'),
            'banktranstype' => Yii::t('app', 'Banktranstype'),
            'amount' => Yii::t('app', 'Amount'),
            'currcode' => Yii::t('app', 'Currcode'),
        ];
    }

    /**
     * @inheritdoc
     * @return BankAccTransQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BankAccTransQuery(get_called_class());
    }
}
