<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление товарами';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php Yii::$app->session->setFlash('error', 'Внимание! Продукты с ID номером от 1 по 7, добавлены были после окончательных работ по функционалу продуктов и аукциона. Данные продукты (ID 1-7) работают стабильно, все остальные продукты будут выдавать ошибку, так как они были тестовые. Чтобы избежать проблем, надо удалить продукты начиная с ID#8 и заново их загрузить на сайт.');?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                <p class="card-category">
                    <?= Html::a('Добавить новый товар', ['create'], ['class' => 'btn btn-transparent']) ?>
                    <?= Html::a('Рассылка нового товара за последние 24 часа', ['send'], ['class' => 'btn btn-transparent']) ?>
                </p>
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
                        //'category',
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
                        'location',
                        //'date_posted',
                        'seller',
                        //'description:ntext',
                        //'contact_name',
                        //'phone',
                        [
                            'attribute' => 'prd_cat_view',
                            'format' => 'raw',
                            'value' => function ($model) {
                                $result = '';
                                switch ($model->prd_cat_view) {
                                    case '0': {
                                        $result = "Type 1";
                                        break;
                                    }
                                    case '1': {
                                        $result = "Ремонт";
                                        break;
                                    }
                                    case '2': {
                                        $result = "Продажа";
                                        break;
                                    }
                                    case '3': {
                                        $result = "Аренда";
                                        break;
                                    }
                                    case '4': {
                                        $result = "Аукцион";
                                        break;
                                    }
                                }
                                return $result;
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