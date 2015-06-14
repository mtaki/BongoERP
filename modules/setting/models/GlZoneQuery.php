<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[GlZone]].
 *
 * @see GlZone
 */
class GlZoneQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return GlZone[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return GlZone|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}