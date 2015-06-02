<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_admin_hackers".
 *
 * @property integer $id
 * @property string $date
 * @property string $login_time
 * @property string $name
 * @property string $ip_address
 * @property string $client_software
 */
class Hacker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_admin_hackers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'login_time'], 'safe'],
            [['name', 'ip_address'], 'string', 'max' => 50],
            [['client_software'], 'string', 'max' => 200]
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
            'login_time' => Yii::t('app', 'Login Time'),
            'name' => Yii::t('app', 'Name'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'client_software' => Yii::t('app', 'Client Software'),
        ];
    }

    /**
     * @inheritdoc
     * @return HackerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HackerQuery(get_called_class());
    }
}
