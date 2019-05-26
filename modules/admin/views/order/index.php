<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\User;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                <!--<p class="card-category"><?/*= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-transparent']) */?></p>-->
            </div>
            <div class="card-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => [
                        'id',
                        'created_at',
                        'updated_at',
                        'qty',
                        //'sum',
                        [
                            'attribute' => 'status',
                            'value' => function ($data) {
                                return !$data->status ? '<span class="text-danger">Активен</span>' : '<span class="text-success">Завершен</span>';
                            },
                            'format' => 'html',
                        ],
                        //'user_name',
                        //'email:email',
                        //'phone',
                        //'address',
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