<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class Image extends ActiveRecord
{
    public static function tableName()
    {
        return 'image';
    }
}