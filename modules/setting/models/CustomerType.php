<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_crm_customer_type".
 *
 * @property integer $id
 * @property string $type
 * @property string $description
 */
class CustomerType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_crm_customer_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'description'], 'required'],
            [['type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', 'Type'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return CustomerTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomerTypeQuery(get_called_class());
    }
}
