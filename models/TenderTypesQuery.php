<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TenderTypes]].
 *
 * @see TenderTypes
 */
class TenderTypesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TenderTypes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TenderTypes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
