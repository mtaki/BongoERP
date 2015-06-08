<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[DbCrPaymentmethod]].
 *
 * @see DbCrPaymentmethod
 */
class DbCrPaymentmethodQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return DbCrPaymentmethod[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DbCrPaymentmethod|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}