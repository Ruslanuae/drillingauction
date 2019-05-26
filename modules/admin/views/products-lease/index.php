<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление продуктами аренды';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-lease-index">
    <h2><?= Html::encode($this->title) ?></h2>
    <p>
        <?= Html::a('Создать продукт аренды', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'category',
                'value' => function($data)
                {
                    return $data->categories->name;
                },
            ],
            //'price',
            //'gallery',
            'manufacturer',
            'model',
            //'condition',
            //'location',
            //'date_posted',
            //'company',
            //'description:ntext',
            //'contact_name',
            //'phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
