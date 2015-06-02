<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_admin_group_role".
 *
 * @property string $group_id
 * @property string $role_id
 */
class GroupRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_admin_group_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'role_id'], 'required'],
            [['group_id', 'role_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'group_id' => Yii::t('app', 'Group ID'),
            'role_id' => Yii::t('app', 'Role ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return GroupRoleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GroupRoleQuery(get_called_class());
    }
}
