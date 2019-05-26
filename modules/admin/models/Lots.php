<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "lots".
 *
 * @property int $id
 * @property int $id_category
 * @property string $manufactured Производитель
 * @property string $model Модель
 * @property string $seller Продавец
 * @property int $current_bid Текущая ставка
 * @property int $bid_increment Минимальный шаг
 * @property int $fix_price
 * @property int $rate_condition Состояние торгов (делал ли кто-то ставку)
 * @property string $rate_type Тип лота
 * @property string $date_start Старт продаж
 * @property string $date_sale Окончание продаж
 * @property string $location Местоположение
 * @property int $lot_condition Состояние торгов
 * @property int $product_condition Состояние лота (новый или б/у)
 * @property string $img Изображение
 * @property string $description Подробное описание
 * @property string $visible Виден на сайте или нет
 */
class Lots extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;
    public $gallery;
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
        return 'lots';
    }
    public function getCategories()
    {
        return $this->hasOne(LotsCategories::className(), ['id' => 'id_category']);
    }
    public function getRate()
    {
        return $this->hasOne(RateCondition::className(), ['id' => 'rate_condition']);
    }
    public function getLotc()
    {
        return $this->hasOne(LotCondition::className(), ['id' => 'lot_condition']);
    }
    public function getProduct()
    {
        return $this->hasOne(ProductCondition::className(), ['id' => 'product_condition']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_category', 'manufactured', 'seller', 'current_bid', 'bid_increment'], 'required'],
            [['id_category', 'current_bid', 'bid_increment', 'fix_price', 'rate_condition', 'lot_condition', 'product_condition', 'visible'], 'integer'],
            [['date_start', 'date_sale'], 'safe'],
            [['description'], 'string'],
            [['manufactured', 'model', 'seller', 'rate_type', 'location', 'img'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg, jpeg', 'maxFiles' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Категория',
            'manufactured' => 'Производитель',
            'model' => 'Модель',
            'seller' => 'Продавец',
            'current_bid' => 'Текущая ставка',
            'bid_increment' => 'Минимальный шаг',
            'fix_price' => 'Окончательная цена',
            'rate_condition' => 'Состояние торгов (делал ли кто-то ставку)',
            'rate_type' => 'Тип лота',
            'date_start' => 'Начало продаж',
            'date_sale' => 'Окончание продаж',
            'location' => 'Местоположение',
            'lot_condition' => 'Состояние торгов',
            'product_condition' => 'Состояние лота (новый или б/у)',
            //'image' => 'Изображение (главное фото)',
            'gallery' => 'Галерея (максимум 6 фото)',
            'description' => 'Подробное описание',
            'visible' => 'Виден на сайте или нет',
        ];
    }
    public function upload()
    {
        if($this->validate())
        {
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }
        else{
            return false;
        }
    }

    public function uploadGallery()
    {
        if($this->validate())
        {
            foreach($this->gallery as $file)
            {
                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        }
        else{
            return false;
        }
    }
}
