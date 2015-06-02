<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_gl_core_gl_mapper".
 *
 * @property integer $gl_sub_head
 * @property integer $mapped_gl_account
 */
class CoreGlMapper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_gl_core_gl_mapper';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gl_sub_head', 'mapped_gl_account'], 'required'],
            [['gl_sub_head', 'mapped_gl_account'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_sub_head' => Yii::t('app', 'Gl Sub Head'),
            'mapped_gl_account' => Yii::t('app', 'Mapped Gl Account'),
        ];
    }

    /**
     * @inheritdoc
     * @return CoreGlMapperQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CoreGlMapperQuery(get_called_class());
    }
}
