<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Gam]].
 *
 * @see Gam
 */
class GamQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Gam[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Gam|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}