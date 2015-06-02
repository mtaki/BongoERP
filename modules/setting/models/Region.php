<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_admin_regions".
 *
 * @property integer $Region_Id
 * @property string $Region_Name
 * @property integer $zone_id
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_admin_regions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zone_id'], 'integer'],
            [['Region_Name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Region_Id' => Yii::t('app', 'Region  ID'),
            'Region_Name' => Yii::t('app', 'Region  Name'),
            'zone_id' => Yii::t('app', 'Zone ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return RegionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RegionQuery(get_called_class());
    }
}
