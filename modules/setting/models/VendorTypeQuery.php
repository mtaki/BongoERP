<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[VendorType]].
 *
 * @see VendorType
 */
class VendorTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return VendorType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return VendorType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}