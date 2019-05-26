<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductsLease */

$this->title = 'Создать продукт аренды';
$this->params['breadcrumbs'][] = ['label' => 'Products Leases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-lease-create">

    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['products-lease/']);?>"><i class="fa fa-arrow-left"></i></a></span>  <?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
