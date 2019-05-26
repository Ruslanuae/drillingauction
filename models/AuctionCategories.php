<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class AuctionCategories extends ActiveRecord
{
    public static function tableName()
    {
        return 'lots_categories';
    }
}