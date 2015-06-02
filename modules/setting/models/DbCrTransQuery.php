<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[DbCrTrans]].
 *
 * @see DbCrTrans
 */
class DbCrTransQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return DbCrTrans[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DbCrTrans|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}