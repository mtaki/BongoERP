<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Currence]].
 *
 * @see Currence
 */
class CurrenceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Currence[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Currence|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}