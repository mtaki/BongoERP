<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_account_coa_grand_parent_main_cat".
 *
 * @property integer $id
 * @property string $account_grand_parent_main_cat_code
 * @property string $grand_parent_main_category
 * @property string $Remarks
 *
 * @property GlAccountCoaGrandParentSubCat[] $glAccountCoaGrandParentSubCats
 */
class AccountCoaGrandParentMainCat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_account_coa_grand_parent_main_cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Remarks'], 'required'],
            [['account_grand_parent_main_cat_code'], 'string', 'max' => 9],
            [['grand_parent_main_category'], 'string', 'max' => 50],
            [['Remarks'], 'string', 'max' => 100],
            [['account_grand_parent_main_cat_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'account_grand_parent_main_cat_code' => Yii::t('app', 'Account Grand Parent Main Cat Code'),
            'grand_parent_main_category' => Yii::t('app', 'Grand Parent Main Category'),
            'Remarks' => Yii::t('app', 'Remarks'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccountCoaGrandParentSubCats()
    {
        return $this->hasMany(GlAccountCoaGrandParentSubCat::className(), ['coa_grand_parent_main_cat_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return AccountCoaGrandParentMainCatQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccountCoaGrandParentMainCatQuery(get_called_class());
    }
}
