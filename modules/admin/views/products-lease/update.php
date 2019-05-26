<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductsLease */

$this->title = $model->manufacturer;
$this->params['breadcrumbs'][] = ['label' => 'Products Leases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-lease-update">

    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['products-lease/']);?>"><i class="fa fa-arrow-left"></i></a></span>  Редактирование товара аренды: <?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
