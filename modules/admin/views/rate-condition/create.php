<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\RateCondition */

$this->title = 'Создать новый статус ставки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rate-condition-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
