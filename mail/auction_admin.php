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
    <h2>Hello, manager!</h2>
    <h2>This user, <?=$user['user_name'].' '.$user['user_surname'].' '.$user['phone'];?> won the auction from the company «STIGL F.Z.E.».</h2>
    <h2>User bid: $<?=$max_rent['bid_buyer']?>, by <?=$max_rent['bid_type']?>.</h2>
    <h2><a href="<?=Url::toRoute(['page/lot', 'id'=>$product['id']]);?>">User product: <?=$product['manufacturer'].' '.$product['model']?></a></h2>
    <h3>The user is waiting for your decision.</h3>
</div>


       