<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_debtors_creditors_master".
 *
 * @property integer $part_account
 * @property integer $part_type
 * @property string $name
 * @property string $address1
 * @property string $address2
 * @property string $address3
 * @property string $email
 * @property string $phone
 * @property string $descriptive1
 * @property string $descriptive2
 */
class DebtorCreditorMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_debtors_creditors_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['part_account', 'part_type', 'name', 'address1', 'address2', 'address3', 'email', 'phone', 'descriptive1', 'descriptive2'], 'required'],
            [['part_account', 'part_type'], 'integer'],
            [['address1', 'address2', 'address3'], 'string'],
            [['name'], 'string', 'max' => 70],
            [['email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 12],
            [['descriptive1', 'descriptive2'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'part_account' => Yii::t('app', 'Part Account'),
            'part_type' => Yii::t('app', 'Part Type'),
            'name' => Yii::t('app', 'Name'),
            'address1' => Yii::t('app', 'Address1'),
            'address2' => Yii::t('app', 'Address2'),
            'address3' => Yii::t('app', 'Address3'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'descriptive1' => Yii::t('app', 'Descriptive1'),
            'descriptive2' => Yii::t('app', 'Descriptive2'),
        ];
    }

    /**
     * @inheritdoc
     * @return DebtorCreditorMasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DebtorCreditorMasterQuery(get_called_class());
    }
}
