<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "products_lease".
 *
 * @property int $id
 * @property int $category
 * @property string $price
 * @property string $img
 * @property string $manufacturer
 * @property string $model
 * @property string $condition
 * @property string $location
 * @property string $date_posted
 * @property string $company
 * @property string $description
 * @property string $contact_name
 * @property string $phone
 */
class ProductsLease extends \yii\db\ActiveRecord
{
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
    public function getCategories()
    {
        return $this->hasOne(CategoriesLease::className(), ['id' => 'category']);
    }
    public static function tableName()
    {
        return 'products_lease';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'price', 'manufacturer', 'model', 'condition', 'location', 'description'], 'required'],
            [['category'], 'integer'],
            [['date_posted'], 'safe'],
            [['description'], 'string'],
            [['price'], 'string', 'max' => 20],
            [['manufacturer', 'model', 'condition', 'location', 'company', 'contact_name', 'phone'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Категория',
            'price' => 'Цена',
            'image' => 'Изображение (главное фото)',
            'gallery' => 'Галерея (максимум 6 фото)',
            'manufacturer' => 'Производитель',
            'model' => 'Модель',
            'condition' => 'Состояние',
            'location' => 'Местоположение',
            'date_posted' => 'Дата расположения на сайте',
            'company' => 'Компания',
            'description' => 'Описание',
            'contact_name' => 'Имя контакта',
            'phone' => 'Телефон',
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
