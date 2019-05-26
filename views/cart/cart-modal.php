<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
$this->title = 'STIGL - Order List';
?>

<?php if(!empty($session['cart']['rent'])||!empty($session['cart']['sale'])): ?>
    <div class="table-responsive">
        <?php if(isset($session['cart']['sale'])): ?>
        <h3>Buy</h3>
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Type</th>
<!--                <th>Price</th>-->
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart']['sale'] as $id => $item):?>
                <tr>

                    <td><?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => 50]) ?></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['sale_rent']?></td>
<!--                    <td>--><?//= $item['price']?><!--</td>-->
<!--                    <td><a href="--><?//= Url::to(['cart/del-item', 'id'=>$id, 'type'=>$item['sale_rent']])?><!--"><i class="glyphicon glyphicon-remove text-danger"></i></a></td>-->
                    <td><span data-id="<?=$id?>" data-type="<?=$item['sale_rent']?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
        <?php endif; ?>
        <?php if(isset($session['cart']['rent'])): ?>
        <h3>Rent</h3>
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Type</th>
<!--                <th>Proce</th>-->
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart']['rent'] as $id => $item):?>
                <tr>

                    <td><?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => 50]) ?></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item['sale_rent']?></td>
<!--                    <td>--><?//= $item['price']?><!--</td>-->
                    <td><span data-id="<?= $id ?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
    <?php endif; ?>
    <table class="table table-hover table-striped">
        <tr>
            <td colspan="4">Total: </td>
            <td><?= $session['cart.qty']?></td>
        </tr>
<!--        <tr>-->
<!--            <td colspan="4">Sum: </td>-->
<!--            <td>--><?//= $session['cart.sum']?><!--</td>-->
<!--        </tr>-->
    </table>
    </div>
<?php else: ?>
    <h3>The list of requests to the manager is empty</h3>
<?php endif;?>
