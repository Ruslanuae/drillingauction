<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lots */

$this->title = $model->manufactured;
$this->params['breadcrumbs'][] = ['label' => 'Lots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lots-view">
    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['lots/']);?>"><i class="fa fa-arrow-left"></i></a></span>  Просмотр лота: <?= Html::encode($this->title) ?></h2>
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно желаете удалить данный лот?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img = $model->getImage();?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
            'current_bid',
            'bid_increment',
            'fix_price',
            [
                'attribute' => 'rate_condition',
                'value' => function($data)
                {
                    //debug($data->rate->name);
                    return $data->rate->name;
                },
            ],
            'rate_type',
            'date_start',
            'date_sale',
            'location',
            [
                'attribute' => 'lot_condition',
                'value' => function($data)
                {
                    return $data->lotc->name;
                },
            ],
            [
                'attribute' => 'product_condition',
                'value' => function($data)
                {
                    return $data->product->name;
                },
            ],
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('100x83')}'>",
                'format' => 'html',
            ],
            'description:html',
//            [
//                'attribute' => 'visible',
//                'value' => function($data)
//                {
//                    return $data->visible->name;
//                },
//            ],
            [
                'attribute' => 'visible',
                'value' => !$model -> visible ?
                    '<span class="text-danger">Не отображается на сайте</span>' : '<span class="text-success">Отображается на сайте</span>',
                'format' => 'html',
            ],


        ],
    ]) ?>

</div>
