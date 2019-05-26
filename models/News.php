<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;
use yii\base\Model;
use yii\helpers\HtmlPurifier;

class News extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    public static function tableName()
    {
        return 'news';
    }
}