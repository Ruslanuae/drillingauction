<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TenderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    'options' => [
        'data-pjax' => 1
    ],
]); ?>

<?= $form->field($model, 'id') ?>

<?= $form->field($model, 'tender_type_id') ?>

<?= $form->field($model, 'name_of_equipment_description') ?>

<?= $form->field($model, 'desc_prv_text') ?>

<?= $form->field($model, 'rental_period') ?>

<?php // echo $form->field($model, 'starting_from_date') ?>

<?php // echo $form->field($model, 'end_destination') ?>

<?php // echo $form->field($model, 'requested_standard') ?>

<?php // echo $form->field($model, 'other_information') ?>

<?php // echo $form->field($model, 'requested_documents') ?>

<?php // echo $form->field($model, 'send_request') ?>

<?php // echo $form->field($model, 'looking_to_buy_before') ?>

<?php // echo $form->field($model, 'need_to_be_ready_before') ?>

<?php // echo $form->field($model, 'location_of_equipment') ?>

<?php // echo $form->field($model, 'type_of_certification') ?>

<div class="form-group">
    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
</div>

<?php ActiveForm::end(); ?>