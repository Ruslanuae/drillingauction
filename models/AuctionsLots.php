<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class AuctionsLots extends ActiveRecord
{
    public static function tableName()
    {
        return 'auctions_lots';
    }
}