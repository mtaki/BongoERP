<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_systm_eod_logs".
 *
 * @property integer $id
 * @property string $date
 * @property string $log_sentense
 * @property string $log_time
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_systm_eod_logs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'date', 'log_sentense', 'log_time'], 'required'],
            [['id'], 'integer'],
            [['date', 'log_time'], 'safe'],
            [['log_sentense'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'date' => Yii::t('app', 'Date'),
            'log_sentense' => Yii::t('app', 'Log Sentense'),
            'log_time' => Yii::t('app', 'Log Time'),
        ];
    }

    /**
     * @inheritdoc
     * @return LogQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LogQuery(get_called_class());
    }
}
