<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.05.2018
 * Time: 11:46
 */

namespace app\controllers;

use yii\web\Controller;
use app\modules\admin\models\Products;
use app\models\User;
use app\models\Image;
use app\models\Contacts;
use app\models\ProductsLease;
use app\models\Cart;
use app\models\OrderProduct;
use app\models\OrderItems;
use Codeception\Step\Meta;
use yii\helpers\Url;
use Yii;

class CartController extends Controller
{
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $type = Yii::$app->request->get('sale_rent');
        $qty = !$qty ? 1 : $qty;
        $product = Products::findOne($id);
        if (empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();

        $cart->addToCart($product, $qty, $type);

        //Если пользователь отключил JavaScript
        if (!Yii::$app->request->isAjax) {
            return $this->redirect(Yii::$app->request->referrer);
        }
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItem()
    {
        $this->layout = false;
        $id = Yii::$app->request->get('id');
        $type = Yii::$app->request->get('type');
        //$product = Products::findOne($id);
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id, $type);
        //return $this->redirect(Yii::$app->request->referrer);
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItemView()
    {
        $id = Yii::$app->request->get('id');
        $type = Yii::$app->request->get('type');
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id, $type);
        //$this->layout = false;
        //return $this->render('lot', compact('lot' , 'lot_cond', 'prod_cond'));
        return $this->redirect(Yii::$app->request->referrer);
        //debug($id);
        //debug($type);
        //return $this->render('view', compact('session'));
    }

    //Удаление товара
    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    //Просто показать корзину без добавления товара
    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionView()
    {
        $products = Products::find()->all();
        $users = User::find()->all();
        $domains = Yii::$app->params['domains'];
        $images = Image::find()->asArray()->all();
        $contacts = Contacts::find()->asArray()->one();

        $this->layout = 'default';
        $session = Yii::$app->session;
        $session->open();
        $order = new OrderProduct();
        if ($order->load(Yii::$app->request->post())) {
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];

            if ($order->save()) {
                $this->saveOrderItems($session['cart'], $order->id);
                Yii::$app->session->setFlash('success', 'Your application is accepted. The manager will contact you shortly.');
                //Для пользователя
                Yii::$app->mailer->compose('order', ['session' => $session, 'domains' => $domains, 'contacts' => $contacts, 'images' => $images, 'products' => $products])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo($order->email)
                    ->setSubject('Your reference for STIGL F.Z.E.')
                    //Пометить фильтром
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains . '/page/unsubscribe?mail=' . $order->email], true))
                    ->send();

                //Для Админа
                Yii::$app->mailer->compose('order_admin', ['session' => $session, 'domains' => $domains, 'contacts' => $contacts, 'images' => $images, 'products' => $products, 'order' => $order])
                    ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
                    ->setTo(Yii::$app->params['adminEmail'])
                    ->setSubject('User reference on STIGL F.Z.E.')
                    ->setHeader('List-id', 'STIGL')
                    //Стандартный метод отписки
                    ->setHeader('List-Unsubscribe', Url::to([$domains . '/page/unsubscribe?mail=' . $order->email], true))
                    ->send();

                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Error placing reference.');
            }
        }
        return $this->render('view', compact('session', 'order'));
    }

    protected function saveOrderItems($items, $order_id)
    {
        if (isset($items['sale'])) {
            //debug(1);
            //debug($items['sale']);
            foreach ($items['sale'] as $id => $item) {
                $order_items = new OrderItems();
                $order_items->order_id = $order_id;
                $order_items->product_id = $item['id'];
                $order_items->name = $item['name'];
                $order_items->price = $item['price'];
                $order_items->qty_item = $item['qty'];
                //$order_items->sum_item = 9.9;
                $order_items->type = 'sale';
                $order_items->save();
            }

        }
        if (isset($items['rent'])) {
            //debug(2);
            //debug($items['rent']);
            foreach ($items['rent'] as $id => $item) {
                $order_items = new OrderItems();
                $order_items->order_id = $order_id;
                $order_items->product_id = $item['id'];
                $order_items->name = $item['name'];
                $order_items->rent_price = $item['rent_price'];
                $order_items->qty_item = $item['qty'];
                //$order_items->sum_item = 9.9;
                $order_items->type = 'rent';
                $order_items->save();

            }
        }
    }
}