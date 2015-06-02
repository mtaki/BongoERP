<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[TransactionType]].
 *
 * @see TransactionType
 */
class TransactionTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TransactionType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TransactionType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}