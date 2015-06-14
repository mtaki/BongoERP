<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[AccountCoaGrandParent]].
 *
 * @see AccountCoaGrandParent
 */
class AccountCoaGrandParentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return AccountCoaGrandParent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AccountCoaGrandParent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}