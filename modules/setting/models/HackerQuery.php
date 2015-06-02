<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Hacker]].
 *
 * @see Hacker
 */
class HackerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Hacker[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Hacker|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}