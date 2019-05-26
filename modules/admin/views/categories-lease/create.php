<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoriesLease */

$this->title = 'Создать категорию аренды';
$this->params['breadcrumbs'][] = ['label' => 'Categories Leases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-lease-create">

    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['categories-lease/']);?>"><i class="fa fa-arrow-left"></i></a></span>  <?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
