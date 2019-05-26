<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;

/* @var $this yii\web\View */
/* @var $model app\models\Tender */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$script = <<< JS
    $('#tender-tender_type_id').change(function () {
        window.location = '/admin/tender/create/?filter=' + $(this).val()
    });
JS;
$this->registerJs($script);
?>

<?php if (!empty(Yii::$app->request->get('filter'))): ?>

<?php else: ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tender_type_id')->dropDownList(
        \app\models\TenderTypes::getAllTenderTypes(), [
        'prompt' => 'Select service type ...',
    ]) ?>
    <?php ActiveForm::end(); ?>
<?php endif; ?>



<?php if (Yii::$app->request->get('filter') == 1): ?>
    <h3 style="text-align: center;color: red">Аренда</h3>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tender_type_id')->dropDownList(
        \app\models\TenderTypes::getAllTenderTypes(), [
        'options' => [
            Yii::$app->request->get('filter') => ['selected' => true],
            'prompt' => 'Select service type ...',
        ]
    ]) ?>

    <?= $form->field($model, 'name_of_equipment_description')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <?= $form->field($model, 'desc_prv_text')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <?= $form->field($model, 'rental_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'starting_from_date')->textInput([
        'class' => 'form-control datetimepicker',
    ]);?>

    <?= $form->field($model, 'end_destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requested_standard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_information')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <?= $form->field($model, 'requested_documents')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

<?php endif; ?>

<?php if (Yii::$app->request->get('filter') == 2): ?>
    <h3 style="text-align: center;color: red">Закупка</h3>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tender_type_id')->dropDownList(
        \app\models\TenderTypes::getAllTenderTypes(), [
        'options' => [
            Yii::$app->request->get('filter') => ['selected' => true],
            'prompt' => 'Select service type ...',
        ]
    ]) ?>

    <?= $form->field($model, 'name_of_equipment_description')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <?= $form->field($model, 'desc_prv_text')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <?= $form->field($model, 'looking_to_buy_before')->textInput([
        'class' => 'form-control datetimepicker',
    ]);?>

    <?= $form->field($model, 'end_destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requested_standard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_information')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <?= $form->field($model, 'requested_documents')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

<?php endif; ?>

<?php if (Yii::$app->request->get('filter') == 3): ?>
    <h3 style="text-align: center;color: red">Ремонт</h3>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tender_type_id')->dropDownList(
        \app\models\TenderTypes::getAllTenderTypes(), [
        'options' => [
            Yii::$app->request->get('filter') => ['selected' => true],
            'prompt' => 'Select service type ...',
        ]
    ]) ?>

    <?= $form->field($model, 'name_of_equipment_description')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <?= $form->field($model, 'desc_prv_text')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <?= $form->field($model, 'need_to_be_ready_before')->textInput([
        'class' => 'form-control datetimepicker',
    ]);?>

    <?= $form->field($model, 'location_of_equipment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_of_certification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_information')->widget(Redactor::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'fontcolor',
                'fullscreen'
            ]
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

<?php endif; ?>