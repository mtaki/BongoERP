<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_ap_lpo_detail".
 *
 * @property integer $id
 * @property integer $lpo_id
 * @property integer $purchase_type_list_id
 * @property integer $cost_center
 * @property double $quantity
 * @property string $manufacturer
 * @property string $released
 * @property integer $correct_category
 * @property string $like_invoice
 * @property string $received
 * @property string $payed
 * @property string $update_gl
 */
class LpoDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_ap_lpo_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lpo_id', 'cost_center', 'quantity', 'manufacturer', 'released', 'correct_category', 'like_invoice', 'received', 'payed', 'update_gl'], 'required'],
            [['lpo_id', 'purchase_type_list_id', 'cost_center', 'correct_category'], 'integer'],
            [['quantity'], 'number'],
            [['manufacturer'], 'string', 'max' => 50],
            [['released', 'like_invoice', 'received', 'payed', 'update_gl'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'lpo_id' => Yii::t('app', 'Lpo ID'),
            'purchase_type_list_id' => Yii::t('app', 'Purchase Type List ID'),
            'cost_center' => Yii::t('app', 'Cost Center'),
            'quantity' => Yii::t('app', 'Quantity'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'released' => Yii::t('app', 'Released'),
            'correct_category' => Yii::t('app', 'Correct Category'),
            'like_invoice' => Yii::t('app', 'Like Invoice'),
            'received' => Yii::t('app', 'Received'),
            'payed' => Yii::t('app', 'Payed'),
            'update_gl' => Yii::t('app', 'Update Gl'),
        ];
    }

    /**
     * @inheritdoc
     * @return LpoDetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LpoDetailQuery(get_called_class());
    }
}
