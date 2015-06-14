<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[LpoPurchaseType]].
 *
 * @see LpoPurchaseType
 */
class LpoPurchaseTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return LpoPurchaseType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return LpoPurchaseType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}