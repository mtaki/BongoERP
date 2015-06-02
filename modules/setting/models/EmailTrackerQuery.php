<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[EmailTracker]].
 *
 * @see EmailTracker
 */
class EmailTrackerQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return EmailTracker[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return EmailTracker|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}