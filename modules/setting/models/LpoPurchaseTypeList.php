<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_ap_lpo_purchase_type_list".
 *
 * @property integer $id
 * @property integer $purchase_type_id
 * @property string $name
 * @property integer $sub_gl
 * @property integer $coa_id
 */
class LpoPurchaseTypeList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_ap_lpo_purchase_type_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['purchase_type_id', 'name', 'sub_gl'], 'required'],
            [['purchase_type_id', 'sub_gl', 'coa_id'], 'integer'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'purchase_type_id' => Yii::t('app', 'Purchase Type ID'),
            'name' => Yii::t('app', 'Name'),
            'sub_gl' => Yii::t('app', 'Sub Gl'),
            'coa_id' => Yii::t('app', 'Coa ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return LpoPurchaseTypeListQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LpoPurchaseTypeListQuery(get_called_class());
    }
}
