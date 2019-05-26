<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.08.2015
 * Time: 11:42
 * @var $this yii\web\View
 * @var $user app\models\User
 */
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="table-responsive">
    <h2>Hello, <?=$user['user_name'].' '.$user['user_surname'];?>!</h2>
    <h2>You won the auction from the company «STIGL F.Z.E.».</h2>
    <h2>Your bid: $<?=$max_rent['bid_buyer']?>, by <?=$max_rent['bid_type']?>.</h2>
    <h2><a href="<?=Url::toRoute(['page/lot', 'id'=>$product['id']]);?>">Your product: <?=$product['manufacturer'].' '.$product['model']?></a></h2>
    <h3>After clarifying all the details, our manager will contact you.</h3>
</div>


       