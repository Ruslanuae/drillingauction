<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.05.2018
 * Time: 12:07
 */

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class OrderItems extends ActiveRecord
{
    public static function tableName()
    {
        return 'order_items';
    }
    public function rules()
    {
        return [
            [['order_id','product_id','name', 'qty_item'], 'required'],
            [['order_id', 'product_id', 'qty_item'], 'integer'],
            [['sum_item'], 'number'],
            [['price', 'rent_price', 'name'], 'string', 'max' => 255],
        ];
    }
    public function getOrderProduct()
    {
        return $this->hasOne(OrderProduct::className(), ['id' => 'order_id']);
    }
}