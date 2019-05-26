<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление услугами';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                <p class="card-category"><?= Html::a('Добавить услугу', ['create'], ['class' => 'btn btn-transparent']) ?></p>
            </div>
            <div class="card-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'options' => [
                        'class' => 'table-responsive',
                    ],
                    'tableOptions' => [
                        'class' => 'table',
                    ],
                    'columns' => [
                        'id',
                        'name',
                        //'image',
                        'description:html',
                        //'service_left:html',
                        //'service_right:ntext',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{view} {update} {delete}',
                            'headerOptions' => [
                                'style' => 'width: 130px',
                                'class' => 'text-primary',
                            ],
                            'header' => 'Действия',
                            'buttons' => [
                                'view' => function($url, $model, $key) {     // render your custom button
                                    return '<a href="'.$url.'" class="btn btn-info btn-link btn-sm" data-original-title="View">
                                                <i class="material-icons">visibility</i>
                                                <div class="ripple-container"></div>
                                            </a>';
                                },
                                'update' => function($url, $model, $key) {     // render your custom button
                                    return '<a href="'.$url.'" class="btn btn-primary btn-link btn-sm" data-original-title="Edit">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>';
                                },
                                'delete' => function($url, $model, $key) {     // render your custom button
                                    return '<a href="'.$url.'" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </a>';
                                }
                            ]
                        ],
                    ],
                    'summary' => false,
                    'pager' => [
                        'prevPageLabel' => 'Previous',
                        'nextPageLabel' => 'Next',
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>