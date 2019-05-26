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
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

class OrderProduct extends ActiveRecord
{
    public static function tableName()
    {
        return 'order_product';
    }
    //Возвращает масиив с нашим поведением
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' =>
                 [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                  ],
                //если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    public function rules()
    {
        return [
            [['user_name','email','phone'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['qty'], 'integer'],
            [['sum'], 'number'],
            [['status'], 'boolean'],
            [['user_name','email','phone','address'], 'string', 'max' => 255],
        ];
    }
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }
    public function attributeLabels()
    {
        return [
            'user_name' => 'Full Name',
            'email' => 'E-mail',
            'phone' => 'Phone',
            //'address' => 'Address',

        ];
    }
    /*public function addToCart($product, $qty = 1)
    {
        //Если добавляется такой же товар который находится в корзине, то плюсуем его к такому же
        if(isset($_SESSION['cart'][$product->id]))
        {
            $_SESSION['cart'][$product-id]['qty']+=$qty;
        }
        //Если нет, то делаем его отдельным в списке
        else
        {
            $_SESSION['cart'][$product->id] = [
                'qty' => $qty,
                'name' => $product->name,
                'price' => $product->price,
                'img' => $product->img
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
    }
    public function recalc($id)
    {
        if(!isset($_SESSION['cart'][$id])) return false;
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);
    }*/
  
}