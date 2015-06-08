<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[FixedAssetsMaster]].
 *
 * @see FixedAssetsMaster
 */
class FixedAssetsMasterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FixedAssetsMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FixedAssetsMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}