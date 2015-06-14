<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[CustomerType]].
 *
 * @see CustomerType
 */
class CustomerTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CustomerType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CustomerType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}