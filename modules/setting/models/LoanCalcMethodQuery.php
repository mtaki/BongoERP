<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[LoanCalcMethod]].
 *
 * @see LoanCalcMethod
 */
class LoanCalcMethodQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return LoanCalcMethod[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return LoanCalcMethod|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}