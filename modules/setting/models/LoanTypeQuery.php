<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[LoanType]].
 *
 * @see LoanType
 */
class LoanTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return LoanType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return LoanType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}