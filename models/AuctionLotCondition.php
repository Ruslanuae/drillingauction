<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class AuctionLotCondition extends ActiveRecord
{
    public static function tableName()
    {
        return 'lot_condition';
    }
}