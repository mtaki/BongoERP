<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_systm_email_tracker".
 *
 * @property string $id
 * @property string $sender
 * @property string $receiver
 * @property string $subject
 * @property string $body
 * @property string $status
 */
class EmailTracker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_systm_email_tracker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender', 'receiver', 'subject', 'body'], 'required'],
            [['body'], 'string'],
            [['sender', 'receiver'], 'string', 'max' => 50],
            [['subject'], 'string', 'max' => 200],
            [['status'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sender' => Yii::t('app', 'Sender'),
            'receiver' => Yii::t('app', 'Receiver'),
            'subject' => Yii::t('app', 'Subject'),
            'body' => Yii::t('app', 'Body'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @inheritdoc
     * @return EmailTrackerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EmailTrackerQuery(get_called_class());
    }
}
