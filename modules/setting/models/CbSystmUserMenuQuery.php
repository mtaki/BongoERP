<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[UserMenu]].
 *
 * @see UserMenu
 */
class CbSystmUserMenuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return UserMenu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserMenu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}