<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_loan_type".
 *
 * @property string $id
 * @property string $loan_type
 * @property double $interest_rate
 * @property string $description
 */
class LoanType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_loan_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['interest_rate', 'description'], 'required'],
            [['interest_rate'], 'number'],
            [['loan_type'], 'string', 'max' => 40],
            [['description'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'loan_type' => Yii::t('app', 'Loan Type'),
            'interest_rate' => Yii::t('app', 'Interest Rate'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return LoanTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LoanTypeQuery(get_called_class());
    }
}
