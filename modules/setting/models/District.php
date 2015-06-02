<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_admin_district".
 *
 * @property integer $District_Id
 * @property integer $Region_Id
 * @property string $District_Name
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_admin_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Region_Id'], 'integer'],
            [['District_Name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'District_Id' => Yii::t('app', 'District  ID'),
            'Region_Id' => Yii::t('app', 'Region  ID'),
            'District_Name' => Yii::t('app', 'District  Name'),
        ];
    }

    /**
     * @inheritdoc
     * @return DistrictQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DistrictQuery(get_called_class());
    }
}
