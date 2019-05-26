<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class AuctionDate extends ActiveRecord
{
    public static function tableName()
    {
        return 'auction_date';
    }
}