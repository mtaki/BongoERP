<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_account_coa_grand_parent_sub_cat".
 *
 * @property integer $id
 * @property string $account_grand_parent_sub_cat_code
 * @property integer $coa_grand_parent_main_cat_id
 * @property string $grand_parent_sub_category
 * @property string $Remarks
 *
 * @property GlAccountCoaGrandParent[] $glAccountCoaGrandParents
 * @property GlAccountCoaGrandParentMainCat $coaGrandParentMainCat
 */
class AccountCoaGrandParentSubCat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_account_coa_grand_parent_sub_cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coa_grand_parent_main_cat_id'], 'integer'],
            [['Remarks'], 'required'],
            [['account_grand_parent_sub_cat_code'], 'string', 'max' => 9],
            [['grand_parent_sub_category'], 'string', 'max' => 255],
            [['Remarks'], 'string', 'max' => 100],
            [['account_grand_parent_sub_cat_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'account_grand_parent_sub_cat_code' => Yii::t('app', 'Account Grand Parent Sub Cat Code'),
            'coa_grand_parent_main_cat_id' => Yii::t('app', 'Coa Grand Parent Main Cat ID'),
            'grand_parent_sub_category' => Yii::t('app', 'Grand Parent Sub Category'),
            'Remarks' => Yii::t('app', 'Remarks'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccountCoaGrandParents()
    {
        return $this->hasMany(GlAccountCoaGrandParent::className(), ['coa_grand_parent_sub_cat_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoaGrandParentMainCat()
    {
        return $this->hasOne(GlAccountCoaGrandParentMainCat::className(), ['id' => 'coa_grand_parent_main_cat_id']);
    }

    /**
     * @inheritdoc
     * @return AccountCoaGrandParentSubCatQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccountCoaGrandParentSubCatQuery(get_called_class());
    }
}
