<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoriesDrilling */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'image', [
    'template' => '
    <div class="form-file-multiple">
        {input}
        <div class="input-group">
            <input type="text" class="form-control inputFileVisible" placeholder="Изображение">
            <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                    <i class="material-icons">attach_file</i>
                </button>
            </span>
        </div>
    </div>'
])->fileInput([
    'class' => 'inputFileHidden'
]) ?>

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

<?php echo $form->field($model, 'service_left')->widget(Redactor::className(), [
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 200,
        'plugins' => [
            'fontcolor',
            'fullscreen'
        ]
    ]
]);?>

<?php echo $form->field($model, 'service_right')->widget(Redactor::className(), [
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