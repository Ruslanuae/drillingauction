<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class AuctionProductCondition extends ActiveRecord
{
    public static function tableName()
    {
        return 'product_condition';
    }
}