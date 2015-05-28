<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Usagegroup]].
 *
 * @see Usagegroup
 */
class UsagegroupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Usagegroup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Usagegroup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}