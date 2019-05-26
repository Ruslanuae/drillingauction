<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30.05.2018
 * Time: 11:46
 */

namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\AuctionLotCondition;
use app\models\AuctionProductCondition;
use app\models\Lots;
use app\models\AuctionCategories;
use Ratchet\Server\Go;
use app\modules\admin\models\Products;
use app\models\OrderProduct;
use app\models\AuctionRateHistory;
use app\models\OrderItems;
use Codeception\Step\Meta;


class BidController extends Controller
{
    public function actionAdd()
    {
        $maxInt32 = 2147483647;
        $bid = Yii::$app->request->post('bid');
        $id = Yii::$app->request->get('id');
        $user_id = Yii::$app->user->id;
        $lot = Products::findOne($id);
        $current_bid = $lot['current_bid'];
        $bid_increment = $lot['bid_increment'];
        if ($bid >= $current_bid + $bid_increment && $bid <= $maxInt32) {
            $lot->current_bid = $bid;
            $lot->save();
            $rate_items = new AuctionRateHistory();
            $rate_items->num_lot = $lot['id'];
            $rate_items->buyer = $user_id;
            $rate_items->bid_buyer = $bid;
            $rate_items->bid_type = 'sale';
            //0000-00-00 00:00:00
            //$rate_items->bid_date = date('Y-m-d H:i:s', time());
            $rate_items->save();
            //Флеш сообщение
            Yii::$app->session->setFlash('success', "Your Buy Bid is made! Thanks!");
            return $this->redirect(Yii::$app->request->referrer);
        } elseif (empty($bid)) {
            Yii::$app->session->setFlash('error', "Error! Enter value!");
            return $this->redirect(Yii::$app->request->referrer);
        } elseif ($bid > $maxInt32) {
            Yii::$app->session->setFlash('error', "Ooops! The bid is too high. You scoff at the auction, or you're crazy!");
            return $this->redirect(Yii::$app->request->referrer);
        } else {
            //Флеш сообщение
            Yii::$app->session->setFlash('error', "Error! Wrong bid! The bid must be greater than the current bid!");
            return $this->redirect(Yii::$app->request->referrer);
        }
    }
    public function actionAddRent()
    {
        $maxInt32 = 2147483647;
        $bid_rent = Yii::$app->request->post('bid_rent');
        $id = Yii::$app->request->get('id');
        $lot = Products::findOne($id);
        $user_id = Yii::$app->user->id;
        $current_bid_rent = $lot['current_bid_rent'];
        $bid_increment_rent = $lot['bid_increment_rent'];
        if ($bid_rent >= $current_bid_rent + $bid_increment_rent && $bid_rent <= $maxInt32) {
            $lot->current_bid_rent = $bid_rent;
            $lot->save();
            $rate_items = new AuctionRateHistory();
            $rate_items->num_lot = $lot['id'];
            $rate_items->buyer = $user_id;
            $rate_items->bid_buyer = $bid_rent;
            $rate_items->bid_type = 'rent';
            //0000-00-00 00:00:00
            //$rate_items->bid_date = date('Y-m-d H:i:s', time());
            $rate_items->save();
            //Флеш сообщение
            Yii::$app->session->setFlash('success', "Your Rent Bid is made! Thanks!");
            return $this->redirect(Yii::$app->request->referrer);
        } elseif (empty($bid_rent)) {
            Yii::$app->session->setFlash('error', "Error! Enter value!");
            return $this->redirect(Yii::$app->request->referrer);
        } elseif ($bid_rent > $maxInt32) {
            Yii::$app->session->setFlash('error', "Ooops! The bid is too high. You scoff at the auction, or you're crazy!");
            return $this->redirect(Yii::$app->request->referrer);
        } else {
            //Флеш сообщение
            Yii::$app->session->setFlash('error', "Error! Wrong bid! The bid must be greater than the current bid!");
            return $this->redirect(Yii::$app->request->referrer);
        }
    }
    //Удаление товара
    public function actionClear()
    {
        $session = Yii::$app->session;
        $session -> open();
        $session -> remove('cart');
        $session -> remove('cart.qty');
        $session -> remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    //Просто показать корзину без добавления товара
    public function actionShow()
    {
        $session = Yii::$app->session;
        $session -> open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    public function goDoor(){
        Go::goDoor();
    }
    protected function saveOrderItems ($items, $order_id)
    {
        foreach($items as $id => $item)
        {
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty'] * $item['price'];
            $order_items->save();
        }
    }
}