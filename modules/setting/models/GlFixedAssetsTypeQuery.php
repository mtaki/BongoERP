<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[GlFixedAssetsType]].
 *
 * @see GlFixedAssetsType
 */
class GlFixedAssetsTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return GlFixedAssetsType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return GlFixedAssetsType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}