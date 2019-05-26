<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tender */

$this->title = 'Создать тендер';
$this->params['breadcrumbs'][] = ['label' => 'Tender', 'url' => ['index']];
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