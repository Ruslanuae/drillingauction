<?php

namespace app\modules\admin\models;
use Yii;
class Categories extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }
    /*public function getCategory()
    {
        return $this->hasOne(Category)
    }*/
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ Категории',
            'name' => 'Название',
        ];
    }
}
