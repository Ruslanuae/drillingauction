<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\RateCondition */

$this->title = $model->name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rate-condition-update">

    <h2>Редактирование статуса ставки: <?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
