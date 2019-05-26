<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Countries;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'user_surname')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

<?php $dropList = array();
$countries = Countries::find()->asArray()->all();
foreach ($countries as $country)
{
    $dropList[$country['id']]=$country['name'];
}echo $form->field($model, 'country')->dropDownList($dropList, ['prompt' => '']) ?>

<?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'status')->dropDownList([ '1' => 'Не активирован', '10' => 'Активирован', ], ['prompt' => '']) ?>
<?= $form->field($model, 'subscribe')->dropDownList([ '0' => 'Отказан от подписки', '1' => 'Подписан на рассылку', ], ['prompt' => '']) ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>