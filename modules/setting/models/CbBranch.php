<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_branch".
 *
 * @property string $branch_no
 * @property string $branch_name
 * @property integer $branch_zone
 * @property string $branch_description
 *
 * @property CbGlGam[] $cbGlGams
 */
class CbBranch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branch_no', 'branch_name', 'branch_zone', 'branch_description'], 'required'],
            [['branch_zone'], 'integer'],
            [['branch_no'], 'string', 'max' => 3],
            [['branch_name'], 'string', 'max' => 20],
            [['branch_description'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'branch_no' => Yii::t('app', 'Branch No'),
            'branch_name' => Yii::t('app', 'Branch Name'),
            'branch_zone' => Yii::t('app', 'Branch Zone'),
            'branch_description' => Yii::t('app', 'Branch Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCbGlGams()
    {
        return $this->hasMany(CbGlGam::className(), ['branch_id' => 'branch_no']);
    }

    /**
     * @inheritdoc
     * @return CbBranchQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CbBranchQuery(get_called_class());
    }
}
