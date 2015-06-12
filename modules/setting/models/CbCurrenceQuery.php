<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[CbCurrence]].
 *
 * @see CbCurrence
 */
class CbCurrenceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CbCurrence[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CbCurrence|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}