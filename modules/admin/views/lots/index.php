<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление лотами';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lots-index">
    <h2><?= Html::encode($this->title) ?></h2>
    <p>
        <?= Html::a('Создать лот', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'id_category',
            [
                'attribute' => 'id_category',
                'value' => function($data)
                {
                    return $data->categories->name;
                },
            ],
            //'number_lot',
            'manufactured',
            'model',
            'seller',
            //'current_bid',
            //'bid_increment',
            //'fix_price',
            //'rate_condition',
            //'rate_type',
            //'date_start',
            //'date_sale',
            //'location',
            //'lot_condition',
            //'product_condition',
            //'img',
            //'description:ntext',
            //'visible',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
