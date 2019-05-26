<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\FilterCategory */

$this->title = 'Create Filter Category';
$this->params['breadcrumbs'][] = ['label' => 'Filter Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filter-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
