<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[AccountPostingType]].
 *
 * @see AccountPostingType
 */
class AccountPostingTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return AccountPostingType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AccountPostingType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}