<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_fixed_assets_type".
 *
 * @property integer $sub_ledger_no
 * @property string $name
 * @property string $remarks
 * @property integer $mapped_gl_account
 *
 * @property GlFixedAssetsMaster[] $glFixedAssetsMasters
 */
class FixedAssetsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_fixed_assets_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_ledger_no', 'name', 'remarks'], 'required'],
            [['sub_ledger_no', 'mapped_gl_account'], 'integer'],
            [['name', 'remarks'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_ledger_no' => Yii::t('app', 'Sub Ledger No'),
            'name' => Yii::t('app', 'Name'),
            'remarks' => Yii::t('app', 'Remarks'),
            'mapped_gl_account' => Yii::t('app', 'Mapped Gl Account'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlFixedAssetsMasters()
    {
        return $this->hasMany(GlFixedAssetsMaster::className(), ['asset_type' => 'sub_ledger_no']);
    }

    /**
     * @inheritdoc
     * @return FixedAssetsTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FixedAssetsTypeQuery(get_called_class());
    }
}
