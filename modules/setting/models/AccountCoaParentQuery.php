<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[AccountCoaParent]].
 *
 * @see AccountCoaParent
 */
class AccountCoaParentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return AccountCoaParent[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AccountCoaParent|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}