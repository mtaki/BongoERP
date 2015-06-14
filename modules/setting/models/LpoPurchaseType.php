<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_ap_lpo_purchase_type".
 *
 * @property integer $id
 * @property string $purchase_type
 */
class LpoPurchaseType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_ap_lpo_purchase_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'purchase_type'], 'required'],
            [['id'], 'integer'],
            [['purchase_type'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'purchase_type' => Yii::t('app', 'Purchase Type'),
        ];
    }

    /**
     * @inheritdoc
     * @return LpoPurchaseTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LpoPurchaseTypeQuery(get_called_class());
    }
}
