<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[ApLpo]].
 *
 * @see ApLpo
 */
class ApLpoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ApLpo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ApLpo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}