<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[GamLoan]].
 *
 * @see GamLoan
 */
class GamLoanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return GamLoan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return GamLoan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}