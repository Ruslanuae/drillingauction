<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "filter_lot".
 *
 * @property int $id
 * @property int $product_id
 * @property int $category_id
 * @property string $value
 */
class FilterLot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'filter_lot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'category_id', 'value'], 'required'],
            [['product_id', 'category_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'category_id' => 'Category ID',
            'value' => 'Value',
        ];
    }
}
