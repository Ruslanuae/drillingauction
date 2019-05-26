<?php

namespace app\models;

use yii\db\ActiveRecord;
use Yii;
use yii\base\Model;
use yii\helpers\HtmlPurifier;

class ImportMail extends ActiveRecord
{
    public static function tableName()
    {
        return 'import_mail';
    }
}