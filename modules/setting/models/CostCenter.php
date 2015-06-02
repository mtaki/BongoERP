<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_cost_center".
 *
 * @property integer $Cost_center_id
 * @property string $Cost_center_name
 * @property string $Cost_center_description
 * @property string $date_started
 * @property string $Status
 * @property string $Date_closed
 *
 * @property GlFixedAssetsMaster[] $glFixedAssetsMasters
 */
class CostCenter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_cost_center';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cost_center_id'], 'required'],
            [['Cost_center_id'], 'integer'],
            [['date_started', 'Date_closed'], 'safe'],
            [['Cost_center_name'], 'string', 'max' => 50],
            [['Cost_center_description'], 'string', 'max' => 100],
            [['Status'], 'string', 'max' => 10],
            [['Cost_center_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cost_center_id' => Yii::t('app', 'Cost Center ID'),
            'Cost_center_name' => Yii::t('app', 'Cost Center Name'),
            'Cost_center_description' => Yii::t('app', 'Cost Center Description'),
            'date_started' => Yii::t('app', 'Date Started'),
            'Status' => Yii::t('app', 'Status'),
            'Date_closed' => Yii::t('app', 'Date Closed'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGlFixedAssetsMasters()
    {
        return $this->hasMany(GlFixedAssetsMaster::className(), ['cost_center' => 'Cost_center_id']);
    }

    /**
     * @inheritdoc
     * @return CostCenterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CostCenterQuery(get_called_class());
    }
}
