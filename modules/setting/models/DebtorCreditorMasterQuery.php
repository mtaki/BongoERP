<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[DebtorCreditorMaster]].
 *
 * @see DebtorCreditorMaster
 */
class DebtorCreditorMasterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return DebtorCreditorMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DebtorCreditorMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}