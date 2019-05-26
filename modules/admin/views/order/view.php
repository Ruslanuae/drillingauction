<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\OrderProduct */

$this->title = 'Просмотр заказа: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Order Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                <p class="card-category">
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-transparent']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно желаете удалить данный заказ?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
            <div class="card-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'created_at',
                        'updated_at',
                        'qty',
                        //'sum',
                        //'status',
                        [
                            'attribute' => 'status',
                            'value' => !$model->status ?
                                '<span class="text-danger">Активен</span>' : '<span class="text-success">Завершен</span>',
                            'format' => 'html',
                        ],
                        'user_name',
                        'email:email',
                        'phone',
                        'address',
                    ],
                ]) ?>
                <?php $items = $model->orderItems; ?>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <!--                <th>Сумма</th>-->
                            <th>Тип заказа</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <?php if ($item['type'] == 'sale'): ?>
                                    <td>
                                        <a href="<?= \yii\helpers\Url::to(['/page/product', 'id' => $item->product_id]) ?>"><?= $item['name'] ?></a>
                                    </td>
                                <?php elseif ($item['type'] == 'rent'): ?>
                                    <td>
                                        <a href="<?= \yii\helpers\Url::to(['/page/product-lease', 'id' => $item->product_id]) ?>"><?= $item['name'] ?></a>
                                    </td>
                                <?php endif; ?>
                                <td><?= $item['qty_item'] ?></td>
                                <?php if ($item['type'] == 'sale'): ?>
                                    <td><?= $item['price'] ?></td>
                                <?php elseif ($item['type'] == 'rent'): ?>
                                    <td><?= $item['rent_price'] ?></td>
                                <?php endif; ?>

                                <!--                    <td>--><? //= $item['sum_item']?><!--</td>-->
                                <td><?= $item['type'] ?></td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
