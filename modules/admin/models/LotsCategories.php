<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "lots_categories".
 *
 * @property int $id
 * @property string $name
 * @property string $data_create
 */
class LotsCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lots_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['data_create'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID Категории',
            'name' => 'Название категории',
            'data_create' => 'Дата добавления категории',
        ];
    }
}
