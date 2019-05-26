<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoriesLease */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories Leases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-lease-view">

    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['categories-lease/']);?>"><i class="fa fa-arrow-left"></i></a></span>  Просмотр категории аренды: <?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить данную категорию аренды?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img = $model->getImage();?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('100x83')}'>",
                'format' => 'html',
            ],
            'description:html',
        ],
    ]) ?>

</div>
