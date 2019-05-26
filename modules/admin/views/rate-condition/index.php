<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление состояниями ставок';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rate-condition-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Создать новый статус ставки', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
