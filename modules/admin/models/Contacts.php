<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $index_city
 * @property string $city
 * @property string $street
 * @property string $number_home
 * @property string $mail
 * @property string $site
 * @property string $number_f
 * @property string $number_s
 * @property string $map
 * @property string $description
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['map', 'description'], 'string'],
            [['index_city', 'number_home'], 'string', 'max' => 20],
            [['city', 'street', 'mail', 'site'], 'string', 'max' => 100],
            [['number_f', 'number_s'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID контактов',
            'index_city' => 'Почтовый индекс',
            'city' => 'Город',
            'street' => 'Улица',
            'number_home' => 'Номер дома',
            'mail' => 'E-mail компании',
            'site' => 'Адрес сайта компании',
            'number_f' => 'Номер поддержки',
            'number_s' => 'Номер компании',
            'map' => 'Карта (требуется копироват HTML код с официальной карты Google, указав на ней расположение)',
            'description' => 'Информация',
        ];
    }
}
