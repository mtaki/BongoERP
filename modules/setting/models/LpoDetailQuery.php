<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[LpoDetail]].
 *
 * @see LpoDetail
 */
class LpoDetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return LpoDetail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return LpoDetail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}