<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "categories_lease".
 *
 * @property int $id
 * @property string $name
 * @property string $img
 * @property string $description
 */
class CategoriesLease extends \yii\db\ActiveRecord
{
    public $image;
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
        return 'categories_lease';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ Категории',
            'name' => 'Название',
            'image' => 'Изображение (главное фото)',
            //'img' => 'Изображение',
            'description' => 'Описание',
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
}
