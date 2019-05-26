<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilterLot */

$this->title = 'Create Filter Lot';
$this->params['breadcrumbs'][] = ['label' => 'Filter Lots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filter-lot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
