<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[CbXrate]].
 *
 * @see CbXrate
 */
class CbXrateQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return CbXrate[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CbXrate|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}