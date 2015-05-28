<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "gl_transaction_type".
 *
 * @property integer $tran_type_id
 * @property string $trans_name
 * @property string $trans_type_description
 */
class GlTransactionType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gl_transaction_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trans_name', 'trans_type_description'], 'required'],
            [['trans_name'], 'string', 'max' => 100],
            [['trans_type_description'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tran_type_id' => Yii::t('app', 'Tran Type ID'),
            'trans_name' => Yii::t('app', 'Trans Name'),
            'trans_type_description' => Yii::t('app', 'Trans Type Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return GlTransactionTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GlTransactionTypeQuery(get_called_class());
    }
}
