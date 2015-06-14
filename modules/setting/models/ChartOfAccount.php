<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_chart_of_account".
 *
 * @property integer $id
 * @property integer $account_no
 * @property string $account_name
 * @property integer $gl_account_coa_parent_id
 * @property string $status
 *
 * @property GlAccountTransaction[] $glAccountTransactions
 * @property GlAccountCoaParent $glAccountCoaParent
 */
class ChartOfAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_chart_of_account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_no', 'status'], 'required'],
            [['account_no', 'gl_account_coa_parent_id'], 'integer'],
            [['account_name'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 10],
            [['account_no'], 'unique'],
            [['account_no'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'account_no' => Yii::t('app', 'Account No'),
            'account_name' => Yii::t('app', 'Account Name'),
            'gl_account_coa_parent_id' => Yii::t('app', 'Gl Account Coa Parent ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccountTransactions()
    {
        return $this->hasMany(GlAccountTransaction::className(), ['gl_account' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccountCoaParent()
    {
        return $this->hasOne(GlAccountCoaParent::className(), ['id' => 'gl_account_coa_parent_id']);
    }

    /**
     * @inheritdoc
     * @return ChartOfAccountQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ChartOfAccountQuery(get_called_class());
    }
}
