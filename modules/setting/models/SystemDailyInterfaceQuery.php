<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[SystemDailyInterface]].
 *
 * @see SystemDailyInterface
 */
class SystemDailyInterfaceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SystemDailyInterface[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SystemDailyInterface|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}