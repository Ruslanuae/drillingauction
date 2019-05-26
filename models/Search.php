<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28.05.2018
 * Time: 17:18
 */

namespace app\models;
use yii\base\Model;


class Search extends Model
{
    public $q;

    public function rules()
    {
        return [
            ['q', 'string']
        ];
    }
}