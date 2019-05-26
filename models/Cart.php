<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.05.2018
 * Time: 12:07
 */

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    public function addToCart($product, $qty = 1, $type)
    {
        $mainImg = $product->getImage();
        //Если добавляется такой же товар который находится в корзине, то плюсуем его к такому же
        if(isset($_SESSION['cart'][$type][$product->id]))
        {
            $_SESSION['cart'][$type][$product->id]['qty']+=$qty;
        }
        //Если нет, то делаем его отдельным в списке
        else
        {
            $_SESSION['cart'][$type][$product->id] = [
                'id' => $product->id,
                'qty' => $qty,
                'name' => $product->manufacturer.' '.$product->model,
                'price' => $product->price,
                'sale_rent' => $type,
                'img' => $mainImg->getUrl('x50')
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        //$_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
    }
    public function recalc($id, $type)
    {

        if(!isset($_SESSION['cart'][$type][$id])) return false;

        $qtyMinus = $_SESSION['cart'][$type][$id]['qty'];
        //$sumMinus = $_SESSION['cart'][$type][$id]['qty'] * $_SESSION['cart'][$type][$id]['price'];debug(2);
        $_SESSION['cart.qty'] -= $qtyMinus;
        //$_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$type][$id]);
        
    }
  
}