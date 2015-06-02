<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[ChartOfAccount]].
 *
 * @see ChartOfAccount
 */
class ChartOfAccountQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ChartOfAccount[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ChartOfAccount|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}