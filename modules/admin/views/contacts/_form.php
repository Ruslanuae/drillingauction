<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as Redactor;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'index_city')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'number_home')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'number_f')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'number_s')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'map')->textarea(['rows' => 6]) ?>

<?php echo $form->field($model, 'description')->widget(Redactor::className(), [
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
