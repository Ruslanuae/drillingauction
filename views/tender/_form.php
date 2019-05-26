<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tender */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tender-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tender_type_id')->textInput() ?>

    <?= $form->field($model, 'name_of_equipment_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'desc_prv_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rental_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'starting_from_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'end_destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requested_standard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'requested_documents')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'send_request')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'looking_to_buy_before')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'need_to_be_ready_before')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_of_equipment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_of_certification')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
