<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[TransactionTypes]].
 *
 * @see TransactionTypes
 */
class TransactionTypesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TransactionTypes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TransactionTypes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}