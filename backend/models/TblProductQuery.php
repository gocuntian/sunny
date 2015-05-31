<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[TblProduct]].
 *
 * @see TblProduct
 */
class TblProductQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TblProduct[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblProduct|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}