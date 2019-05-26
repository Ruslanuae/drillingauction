<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SendingMessages */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'heading')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'description')->widget(Redactor::className(), [
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