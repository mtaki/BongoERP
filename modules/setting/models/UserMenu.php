<?php

namespace app\modules\setting\models;

use Yii;

/**
 * This is the model class for table "cb_systm_user_menu".
 *
 * @property integer $id
 * @property string $menu_code
 * @property string $Menu_name
 * @property string $menu_category
 * @property string $menu_link
 * @property integer $linked_role
 */
class UserMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cb_systm_user_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_code', 'Menu_name', 'menu_category', 'menu_link', 'linked_role'], 'required'],
            [['linked_role'], 'integer'],
            [['menu_code'], 'string', 'max' => 5],
            [['Menu_name'], 'string', 'max' => 50],
            [['menu_category'], 'string', 'max' => 30],
            [['menu_link'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'menu_code' => Yii::t('app', 'Menu Code'),
            'Menu_name' => Yii::t('app', 'Menu Name'),
            'menu_category' => Yii::t('app', 'Menu Category'),
            'menu_link' => Yii::t('app', 'Menu Link'),
            'linked_role' => Yii::t('app', 'Linked Role'),
        ];
    }

    /**
     * @inheritdoc
     * @return CbSystmUserMenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CbSystmUserMenuQuery(get_called_class());
    }
}
