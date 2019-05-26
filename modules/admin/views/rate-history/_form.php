<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\RateHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'num_lot')->textInput() ?>

<?= $form->field($model, 'buyer')->textInput() ?>

<?= $form->field($model, 'bid_buyer')->textInput() ?>

<?= $form->field($model, 'bid_date')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>