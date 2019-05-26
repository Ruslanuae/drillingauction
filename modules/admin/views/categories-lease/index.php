<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление категориями аренды';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-lease-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Создать категорию аренды', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            //'img',
            'description:html',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
