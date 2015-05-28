<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[GlTransactionType]].
 *
 * @see GlTransactionType
 */
class GlTransactionTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return GlTransactionType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return GlTransactionType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}