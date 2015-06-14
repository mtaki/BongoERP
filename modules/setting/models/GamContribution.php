<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_gam_contribution".
 *
 * @property string $account_no
 * @property string $customer_id
 * @property double $monthly_contribution
 * @property double $cumulative_contribution
 * @property string $start_date
 * @property string $contribution_source
 *
 * @property CbGlGam $accountNo
 */
class GamContribution extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_gam_contribution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_no', 'customer_id', 'monthly_contribution', 'cumulative_contribution', 'start_date'], 'required'],
            [['monthly_contribution', 'cumulative_contribution'], 'number'],
            [['start_date'], 'safe'],
            [['account_no'], 'string', 'max' => 12],
            [['customer_id'], 'string', 'max' => 7],
            [['contribution_source'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'account_no' => Yii::t('app', 'Account No'),
            'customer_id' => Yii::t('app', 'Customer ID'),
            'monthly_contribution' => Yii::t('app', 'Monthly Contribution'),
            'cumulative_contribution' => Yii::t('app', 'Cumulative Contribution'),
            'start_date' => Yii::t('app', 'Start Date'),
            'contribution_source' => Yii::t('app', 'Contribution Source'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountNo()
    {
        return $this->hasOne(CbGlGam::className(), ['account_no' => 'account_no']);
    }

    /**
     * @inheritdoc
     * @return GamContributionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GamContributionQuery(get_called_class());
    }
}
