<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class SortForm extends Model
{
    public $str; // сортировать по правилу
    public $number; // по сколько товаров выводить на странице

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['str', 'number'], 'trim'],
        ];
    }
}
