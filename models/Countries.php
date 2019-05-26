<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class Countries extends ActiveRecord
{
    public static function tableName()
    {
        return 'countries';
    }
}