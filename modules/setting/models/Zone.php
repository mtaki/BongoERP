<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_admin_zone".
 *
 * @property integer $zone_id
 * @property string $zone_name
 */
class Zone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_admin_zone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zone_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'zone_id' => Yii::t('app', 'Zone ID'),
            'zone_name' => Yii::t('app', 'Zone Name'),
        ];
    }

    /**
     * @inheritdoc
     * @return ZoneQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ZoneQuery(get_called_class());
    }
}
