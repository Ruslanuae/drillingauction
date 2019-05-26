<?php

use app\modules\admin\models\FilterCategory;
use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Управление категориями продуктов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                <p class="card-category"><?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-transparent']) ?></p>
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
                        [
                            'format' => 'raw',
                            'header' => 'Участвует в фильтре',
                            'headerOptions' => [
                                'style' => 'width: 130px',
                                'class' => 'text-primary',
                            ],
                            'value' => function ($data) {
                                $checked = '';
                                $FilterCategory = FilterCategory::findOne(['name' => $data->name]);
                                if ($FilterCategory) {
                                    $checked = 'checked';
                                }
                                $checkbox = '
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input filter-check" data-id="'.$data->id.'" '.$checked.' type="checkbox" value="">
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                ';
                                return $checkbox;
                            }
                        ],
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