<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_account_coa_grand_parent".
 *
 * @property integer $id
 * @property string $account_grand_parent_code
 * @property integer $coa_grand_parent_sub_cat_id
 * @property string $grand_parent_name
 * @property string $Remarks
 *
 * @property GlAccountCoaGrandParentSubCat $coaGrandParentSubCat
 * @property GlAccountCoaParent[] $glAccountCoaParents
 */
class AccountCoaGrandParent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_account_coa_grand_parent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coa_grand_parent_sub_cat_id'], 'integer'],
            [['Remarks'], 'required'],
            [['account_grand_parent_code'], 'string', 'max' => 9],
            [['grand_parent_name'], 'string', 'max' => 50],
            [['Remarks'], 'string', 'max' => 100],
            [['account_grand_parent_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'account_grand_parent_code' => Yii::t('app', 'Account Grand Parent Code'),
            'coa_grand_parent_sub_cat_id' => Yii::t('app', 'Coa Grand Parent Sub Cat ID'),
            'grand_parent_name' => Yii::t('app', 'Grand Parent Name'),
            'Remarks' => Yii::t('app', 'Remarks'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoaGrandParentSubCat()
    {
        return $this->hasOne(GlAccountCoaGrandParentSubCat::className(), ['id' => 'coa_grand_parent_sub_cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccountCoaParents()
    {
        return $this->hasMany(GlAccountCoaParent::className(), ['gl_account_coa_grand_parent_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return AccountCoaGrandParentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccountCoaGrandParentQuery(get_called_class());
    }
}
