<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_gam_loan_calc_methods".
 *
 * @property integer $id
 * @property string $method
 * @property string $Descreption
 *
 * @property CbGlGamLoan[] $cbGlGamLoans
 */
class LoanCalcMethod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_gam_loan_calc_methods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'method', 'Descreption'], 'required'],
            [['id'], 'integer'],
            [['method'], 'string', 'max' => 100],
            [['Descreption'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'method' => Yii::t('app', 'Method'),
            'Descreption' => Yii::t('app', 'Descreption'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGamLoans()
    {
        return $this->hasMany(CbGlGamLoan::className(), ['loan_calc_method' => 'id']);
    }

    /**
     * @inheritdoc
     * @return LoanCalcMethodQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LoanCalcMethodQuery(get_called_class());
    }
}
