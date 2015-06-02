<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[AccountCoaGrandParentMainCat]].
 *
 * @see AccountCoaGrandParentMainCat
 */
class AccountCoaGrandParentMainCatQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return AccountCoaGrandParentMainCat[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AccountCoaGrandParentMainCat|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}