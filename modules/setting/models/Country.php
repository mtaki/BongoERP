<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_admin_country".
 *
 * @property integer $id
 * @property string $country
 * @property string $nationality
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_admin_country';
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
}
