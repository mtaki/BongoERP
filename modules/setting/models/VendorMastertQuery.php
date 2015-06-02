<?php

namespace app\modules\setting\models;

/**
 * This is the ActiveQuery class for [[VendorMaster]].
 *
 * @see VendorMaster
 */
class VendorMastertQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return VendorMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return VendorMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}