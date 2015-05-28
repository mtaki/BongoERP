<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[Exchagerate]].
 *
 * @see Exchagerate
 */
class ExchagerateQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Exchagerate[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Exchagerate|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}