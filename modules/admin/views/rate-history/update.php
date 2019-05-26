<?php

use yii\helpers\Html;

$this->title = 'Редактирование истории:' . $model->bid_date;
$this->params['breadcrumbs'][] = ['label' => 'Rate History', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bid_date, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
            </div>
            <div class="card-body">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>