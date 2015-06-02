<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[AccountTransaction]].
 *
 * @see AccountTransaction
 */
class AccountTransactionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return AccountTransaction[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AccountTransaction|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}