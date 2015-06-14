<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[CbBranch]].
 *
 * @see CbBranch
 */
class CbBranchQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CbBranch[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CbBranch|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}