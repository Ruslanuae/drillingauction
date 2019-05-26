<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\MenuWidget;
use yii\helpers\HtmlPurifier;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Products */

$this->title = 'Просмотр товара: ' . $model->manufacturer;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
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
                            'confirm' => 'Вы действительно желаете удалить данный продукт?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
            <div class="card-body">
                <?php $img = $model->getImage(); ?>
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        [
                            'attribute' => 'category',
                            'value' => function ($data) {
                                return $data->categories->name;
                            },
                        ],
                        // 'price',
                        // 'rent_price',
                        [
                            'attribute' => 'image',
                            'value' => "<img src='{$img->getUrl('100x83')}'>",
                            'format' => 'html',
                        ],
                        'manufacturer',
                        'model',
                        'current_bid',
                        'bid_increment',
                        'current_bid_rent',
                        'bid_increment_rent',
                        'date_start',
                        'date_sale',
                        [
                            'attribute' => 'lot_condition',
                            'value' => function ($data) {
                                return $data->lotc->name;
                            },
                        ],
                        [
                            'attribute' => 'product_condition',
                            'value' => function ($data) {
                                return $data->product->name;
                            },
                        ],
                        'location',
                        'date_posted',
                        'seller',
                        'description:html',
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

                        //            'contact_name',
                        //            'phone',
                        //            [
                        //                'attribute' => 'visible',
                        //                'value' => !$model -> visible ?
                        //                    '<span class="text-danger">Не отображается на сайте</span>' : '<span class="text-success">Отображается на сайте</span>',
                        //                'format' => 'html',
                        //            ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>