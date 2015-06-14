<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[AdminZone]].
 *
 * @see AdminZone
 */
class AdminZoneQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return AdminZone[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AdminZone|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}