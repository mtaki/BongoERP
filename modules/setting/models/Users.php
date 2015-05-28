<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_admin_users".
 *
 * @property string $password
 * @property integer $id
 * @property string $username
 * @property string $name
 * @property string $email_address
 * @property string $user_status
 * @property string $date_created
 * @property integer $created_by
 * @property string $last_logon
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_admin_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password', 'username', 'name', 'email_address', 'user_status', 'date_created', 'created_by', 'last_logon'], 'required'],
            [['date_created', 'last_logon'], 'safe'],
            [['created_by'], 'integer'],
            [['password', 'username', 'name', 'email_address'], 'string', 'max' => 50],
            [['user_status'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'password' => Yii::t('app', 'Password'),
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'name' => Yii::t('app', 'Name'),
            'email_address' => Yii::t('app', 'Email Address'),
            'user_status' => Yii::t('app', 'User Status'),
            'date_created' => Yii::t('app', 'Date Created'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_logon' => Yii::t('app', 'Last Logon'),
        ];
    }

    /**
     * @inheritdoc
     * @return CbAdminUsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CbAdminUsersQuery(get_called_class());
    }
}
