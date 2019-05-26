<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property int $category
 * @property string $price
 * @property string $price_old
 * @property string $img
 * @property string $description
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
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
        return 'products';
    }

    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category']);
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
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'manufacturer', 'model', 'product_condition', 'location', 'description', 'date_sale'], 'required'],
            [['category', 'current_bid', 'bid_increment', 'current_bid_rent', 'bid_increment_rent', 'lot_condition'], 'integer'],
            [['date_posted', 'date_start', 'date_sale', 'visible', 'prd_cat_view'], 'safe'],
            [['description'], 'string'],
            [['manufacturer', 'model', 'product_condition', 'location', 'seller', 'contact_name',  'phone'], 'string', 'max' => 255],
        
        ['image', 'file','extensions' => ['png', 'jpg', 'jpeg']],
            //[['image'], 'file', 'extensions' => ['png', 'jgp','jpeg'], ]
            //[['image'], 'file', 'extensions' => ['png, jpg','jpeg']],
           // [['gallery'], 'file', 'extensions' => ['png, jpg, jpeg'], 'maxFiles' => 6],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Категория',
            'image' => 'Изображение (главное фото)',
            'gallery' => 'Галерея (максимум 6 фото)',
            'manufacturer' => 'Производитель',
            'model' => 'Модель',
            'current_bid' => 'Начальная ставка (за Продажу)',
            'bid_increment' => 'Минимальный шаг (за Продажу)',
            'current_bid_rent' => 'Начальная ставка  (за Аренду)',
            'bid_increment_rent' => 'Минимальный шаг (за Аренду)',
            'date_start' => 'Начало продаж',
            'date_sale' => 'Окончание продаж',
            'lot_condition' => 'Состояние торгов',
            'product_condition' => 'Состояние лота (новый или б/у)',
            'location' => 'Местоположение',
            'date_posted' => 'Дата расположения на сайте',
            'seller' => 'Продавец',
            'description' => 'Описание',
            'contact_name' => 'Имя контакта',
            'phone' => 'Телефон',
            'visible' => 'Виден на сайте или нет',
            'prd_cat_view' => 'Где Показать Товар'
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        } else {
            return false;
        }
    }

    public function uploadGallery()
    {
        if ($this->validate()) {
            foreach ($this->gallery as $file) {
                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path, true );
                @unlink($path);
            }
            return true;
        } else {
            return false;
        }
    }
}
