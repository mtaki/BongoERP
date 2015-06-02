<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_zone".
 *
 * @property integer $zone_id
 * @property string $zone_name
 * @property string $zone_description
 */
class GlZone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_zone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zone_id', 'zone_name', 'zone_description'], 'required'],
            [['zone_id'], 'integer'],
            [['zone_name'], 'string', 'max' => 20],
            [['zone_description'], 'string', 'max' => 60]
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
            'zone_description' => Yii::t('app', 'Zone Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return GlZoneQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GlZoneQuery(get_called_class());
    }
}
