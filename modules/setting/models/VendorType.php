<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_ap_vendor_type".
 *
 * @property integer $id
 * @property string $Vendor_type
 * @property string $vendor_description
 */
class VendorType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_ap_vendor_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vendor_type', 'vendor_description'], 'required'],
            [['Vendor_type'], 'string', 'max' => 30],
            [['vendor_description'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Vendor_type' => Yii::t('app', 'Vendor Type'),
            'vendor_description' => Yii::t('app', 'Vendor Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return VendorTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new VendorTypeQuery(get_called_class());
    }
}
