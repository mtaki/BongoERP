<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[FixedAssetsType]].
 *
 * @see FixedAssetsType
 */
class FixedAssetsTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return FixedAssetsType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FixedAssetsType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}