<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class AuctionRateHistory extends ActiveRecord
{
    public static function tableName()
    {
        return 'rate_history';
    }
}