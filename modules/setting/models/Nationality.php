<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_crm_nationality".
 *
 * @property integer $id
 * @property string $country
 * @property string $nationality
 */
class Nationality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_crm_nationality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'nationality'], 'required'],
            [['country', 'nationality'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country' => Yii::t('app', 'Country'),
            'nationality' => Yii::t('app', 'Nationality'),
        ];
    }

    /**
     * @inheritdoc
     * @return NationalityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NationalityQuery(get_called_class());
    }
}
