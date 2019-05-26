<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\LotsCategories */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lots Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lots-categories-update">

    <h2>Редактирование категории лота: <?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
