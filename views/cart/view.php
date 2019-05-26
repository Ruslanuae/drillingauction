<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->title = 'STIGL - List of requests';
?>
<div style="margin-bottom: 20px;">
    <div class="container">
        <!--FLASH-->
        <!--        --><?php //if(Yii::$app->session->hasFlash('success')):?>
        <!--            <div class="alert alert-success alert-dismissible" role="alert">-->
        <!--                <button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <!--                --><?php //echo Yii::$app->session->getFlash('success')?>
        <!--            </div>-->
        <!--        --><?php //endif;?>
        <!---->
        <!--        --><?php //if(Yii::$app->session->hasFlash('error')):?>
        <!--            <div class="alert alert-danger alert-dismissible" role="alert">-->
        <!--                <button type="button" class="close" data-dismiss="alert"  aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <!--                --><?php //echo Yii::$app->session->getFlash('error')?>
        <!--            </div>-->
        <!--        --><?php //endif;?>
        <!--END: FLASH-->
        <?php if (!empty($session['cart']['rent']) || !empty($session['cart']['sale'])): ?>
            <div class="table-responsive">
                <?php if (isset($session['cart']['sale'])): ?>
                    <h3>Buy</h3>
                    <table class="table table-hover table-striped" id="table">
                        <thead>
                        <tr>
                            <th style="width: 80px">Image</th>
                            <th>Name</th>
                            <th style="width: 20px">Quantity</th>
                            <th style="width: 20px"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($session['cart']['sale'] as $id => $item): ?>
                            <tr>
                                <td><?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => 50]) ?></td>
                                <td><a href="<?= Url::to(['page/product', 'id' => $id]) ?>"><?= $item['name'] ?></a>
                                </td>
                                <input type="hidden" value="<?= $item['sale_rent'] ?>" id="type-view-cart"/>
                                <td><?= $item['qty'] ?></td>
                                <td>
                                    <a href="<?= Url::to(['cart/del-item-view', 'id' => $id, 'type' => $item['sale_rent']]) ?>"><i
                                                class="glyphicon glyphicon-remove text-danger"></i></a></td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                <?php endif; ?>
                <?php if (isset($session['cart']['rent'])): ?>
                    <h3>Rent</h3>
                    <table class="table table-hover table-striped" id="table-rent">
                        <thead>
                        <tr>
                            <th style="width: 80px">Image</th>
                            <th>Name</th>
                            <th style="width: 20px">Quantity</th>
                            <th style="width: 20px"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($session['cart']['rent'] as $id => $item): ?>
                            <tr>
                                <td><?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => 50]) ?></td>
                                <td>
                                    <a href="<?= Url::to(['page/product-lease', 'id' => $id]) ?>"><?= $item['name'] ?></a>
                                </td>
                                <td><?= $item['qty'] ?></td>
                                <td>
                                    <a href="<?= Url::to(['cart/del-item-view', 'id' => $id, 'type' => $item['sale_rent']]) ?>"><i
                                                class="glyphicon glyphicon-remove text-danger"></i></a></td>
                            </tr>
                        <?php endforeach ?>

                        </tbody>
                    </table>
                <?php endif; ?>
                <table class="table table-hover table-striped">
                    <tr>
                        <td>Total:</td>
                        <td style="width: 100px;"><?= $session['cart.qty'] ?></td>
                    </tr>
                </table>
            </div>
            </hr>
            <?php $form = ActiveForm::begin() ?>
            <?= $form->field($order, 'user_name') ?>
            <?= $form->field($order, 'email') ?>
            <?= $form->field($order, 'phone') ?>
            <?= Html::submitButton('Send to manager', ['class' => 'btn btn-success-cart']) ?>
            <?php ActiveForm::end() ?>
        <?php else: ?>
            <h3>The list of requests to the manager is empty</h3>
        <?php endif; ?>
    </div>
</div>
