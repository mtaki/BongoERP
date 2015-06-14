<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[GamContribution]].
 *
 * @see GamContribution
 */
class GamContributionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return GamContribution[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return GamContribution|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}