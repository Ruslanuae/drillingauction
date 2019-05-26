<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;

class FilterCategory extends ActiveRecord
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
        return 'filter_category';
    }
}