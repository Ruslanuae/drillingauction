<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;
use yii\base\Model;
use yii\helpers\HtmlPurifier;

class Online extends ActiveRecord
{
    public static function tableName()
    {
        return 'online';
    }
}