<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "auctions_lots".
 *
 * @property int $id
 * @property int $auc_id
 * @property int $lot_id
 */
class AuctionsLots extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auctions_lots';
    }
    public function getAuctionDate()
    {
        return $this->hasOne(AuctionDate::className(), ['id' => 'auc_id']);
    }
    public function getProducts()
    {
        return $this->hasOne(Products::className(), ['id' => 'lot_id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auc_id', 'lot_id'], 'required'],
            [['auc_id', 'lot_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID Связи',
            'auc_id' => 'ID Аукциона (текстовый вывод)',
            'lot_id' => 'ID Лота (текстовый вывод)',
        ];
    }
}
