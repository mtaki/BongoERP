<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_fixed_assets_master".
 *
 * @property integer $asset_id
 * @property string $barcode_no
 * @property integer $asset_type
 * @property string $manufacturer
 * @property double $accuisation_price
 * @property double $current_value_dep
 * @property double $current_value_market
 * @property double $depreciation_rate
 * @property integer $expected_life_years
 * @property integer $supplier_vendor
 * @property string $accusation_date
 * @property integer $cost_center
 * @property string $assigned_to
 * @property string $asset_status
 * @property string $created_by
 * @property string $verified_by
 *
 * @property GlCostCenter $costCenter
 * @property GlFixedAssetsType $assetType
 */
class FixedAssetsMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_fixed_assets_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barcode_no', 'asset_type', 'manufacturer', 'accuisation_price', 'current_value_dep', 'current_value_market', 'depreciation_rate', 'expected_life_years', 'supplier_vendor', 'accusation_date', 'cost_center', 'assigned_to', 'asset_status', 'created_by', 'verified_by'], 'required'],
            [['asset_type', 'expected_life_years', 'supplier_vendor', 'cost_center'], 'integer'],
            [['accuisation_price', 'current_value_dep', 'current_value_market', 'depreciation_rate'], 'number'],
            [['accusation_date'], 'safe'],
            [['barcode_no'], 'string', 'max' => 12],
            [['manufacturer'], 'string', 'max' => 20],
            [['assigned_to', 'created_by', 'verified_by'], 'string', 'max' => 5],
            [['asset_status'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'asset_id' => Yii::t('app', 'Asset ID'),
            'barcode_no' => Yii::t('app', 'Barcode No'),
            'asset_type' => Yii::t('app', 'Asset Type'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'accuisation_price' => Yii::t('app', 'Accuisation Price'),
            'current_value_dep' => Yii::t('app', 'Current Value Dep'),
            'current_value_market' => Yii::t('app', 'Current Value Market'),
            'depreciation_rate' => Yii::t('app', 'Depreciation Rate'),
            'expected_life_years' => Yii::t('app', 'Expected Life Years'),
            'supplier_vendor' => Yii::t('app', 'Supplier Vendor'),
            'accusation_date' => Yii::t('app', 'Accusation Date'),
            'cost_center' => Yii::t('app', 'Cost Center'),
            'assigned_to' => Yii::t('app', 'Assigned To'),
            'asset_status' => Yii::t('app', 'Asset Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'verified_by' => Yii::t('app', 'Verified By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostCenter()
    {
        return $this->hasOne(GlCostCenter::className(), ['Cost_center_id' => 'cost_center']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssetType()
    {
        return $this->hasOne(GlFixedAssetsType::className(), ['sub_ledger_no' => 'asset_type']);
    }

    /**
     * @inheritdoc
     * @return FixedAssetsMasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FixedAssetsMasterQuery(get_called_class());
    }
}
