<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class Views extends ActiveRecord
{
    public static function tableName()
    {
        return 'views';
    }
}