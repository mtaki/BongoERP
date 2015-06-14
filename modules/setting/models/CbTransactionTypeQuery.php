<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[CbTransactionType]].
 *
 * @see CbTransactionType
 */
class CbTransactionTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CbTransactionType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CbTransactionType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}