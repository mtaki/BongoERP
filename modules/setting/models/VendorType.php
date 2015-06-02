<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_ap_vendor_master_record".
 *
 * @property integer $id
 * @property integer $vendor_sub_gl
 * @property integer $vendor_type_idd
 * @property string $vendor_name
 * @property string $vendor_addres
 * @property string $vendor_industry
 * @property string $vendor_telefone
 * @property string $vendors_email
 * @property string $vendors_bank
 * @property string $vendors_account_no
 * @property string $vendors_other_terms
 */
class VendorType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_ap_vendor_master_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vendor_sub_gl', 'vendor_type_idd', 'vendor_name', 'vendor_addres', 'vendor_industry', 'vendor_telefone', 'vendors_email', 'vendors_bank', 'vendors_account_no', 'vendors_other_terms'], 'required'],
            [['vendor_sub_gl', 'vendor_type_idd'], 'integer'],
            [['vendors_other_terms'], 'string'],
            [['vendor_name'], 'string', 'max' => 50],
            [['vendor_addres', 'vendors_email', 'vendors_bank'], 'string', 'max' => 30],
            [['vendor_industry'], 'string', 'max' => 20],
            [['vendor_telefone', 'vendors_account_no'], 'string', 'max' => 15],
            [['vendor_sub_gl'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'vendor_sub_gl' => Yii::t('app', 'Vendor Sub Gl'),
            'vendor_type_idd' => Yii::t('app', 'Vendor Type Idd'),
            'vendor_name' => Yii::t('app', 'Vendor Name'),
            'vendor_addres' => Yii::t('app', 'Vendor Addres'),
            'vendor_industry' => Yii::t('app', 'Vendor Industry'),
            'vendor_telefone' => Yii::t('app', 'Vendor Telefone'),
            'vendors_email' => Yii::t('app', 'Vendors Email'),
            'vendors_bank' => Yii::t('app', 'Vendors Bank'),
            'vendors_account_no' => Yii::t('app', 'Vendors Account No'),
            'vendors_other_terms' => Yii::t('app', 'Vendors Other Terms'),
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
