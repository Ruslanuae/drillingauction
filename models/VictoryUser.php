<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class VictoryUser extends ActiveRecord
{
    public static function tableName()
    {
        return 'victory_user';
    }
}