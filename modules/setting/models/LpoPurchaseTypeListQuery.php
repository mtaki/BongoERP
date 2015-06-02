<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[LpoPurchaseTypeList]].
 *
 * @see LpoPurchaseTypeList
 */
class LpoPurchaseTypeListQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return LpoPurchaseTypeList[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return LpoPurchaseTypeList|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}