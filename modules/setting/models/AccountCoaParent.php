<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_account_coa_parent".
 *
 * @property integer $id
 * @property string $account_parent_code
 * @property integer $gl_account_coa_grand_parent_id
 * @property string $parent_name
 * @property string $Remarks
 *
 * @property GlAccountCoaGrandParent $glAccountCoaGrandParent
 * @property GlChartOfAccount[] $glChartOfAccounts
 */
class AccountCoaParent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_account_coa_parent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gl_account_coa_grand_parent_id'], 'integer'],
            [['Remarks'], 'required'],
            [['account_parent_code'], 'string', 'max' => 9],
            [['parent_name'], 'string', 'max' => 255],
            [['Remarks'], 'string', 'max' => 100],
            [['account_parent_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'account_parent_code' => Yii::t('app', 'Account Parent Code'),
            'gl_account_coa_grand_parent_id' => Yii::t('app', 'Gl Account Coa Grand Parent ID'),
            'parent_name' => Yii::t('app', 'Parent Name'),
            'Remarks' => Yii::t('app', 'Remarks'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccountCoaGrandParent()
    {
        return $this->hasOne(GlAccountCoaGrandParent::className(), ['id' => 'gl_account_coa_grand_parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlChartOfAccounts()
    {
        return $this->hasMany(GlChartOfAccount::className(), ['gl_account_coa_parent_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return AccountCoaParentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccountCoaParentQuery(get_called_class());
    }
}
