<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoriesLease */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories Leases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categories-lease-update">

    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['categories-lease/']);?>"><i class="fa fa-arrow-left"></i></a></span>  Редактирование категории аренды: <?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
