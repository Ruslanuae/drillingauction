<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductsLease */

$this->title = $model->manufacturer;
$this->params['breadcrumbs'][] = ['label' => 'Products Leases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-lease-view">

    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['products-lease/']);?>"><i class="fa fa-arrow-left"></i></a></span>  Просмотр товара аренды: <?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно желаете удалить данный продукт аренды?',
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
                'attribute' => 'category',
                'value' => function($data)
                {
                    return $data->categories->name;
                },
            ],
            'price',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('100x83')}'>",
                'format' => 'html',
            ],
            'manufacturer',
            'model',
            'condition',
            'location',
            'date_posted',
            'company',
            'description:html',
            'contact_name',
            'phone',
        ],
    ]) ?>

</div>
