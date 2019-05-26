
<?php

/* @var $this yii\web\View */
use \yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'STIGL - Recover Password';
?>
<!--<h2>Регистрация</h2>-->
<!--    $form->field($model, 'text')->textInput()->hint('Введите любой текст')->label('Текстовое поле');-->
<?php $form = ActiveForm::begin(['class'=>'signup', 'id'=>'signup']); ?>
<?= $form->field($model, 'email')->textInput(['placeholder' => Yii::t('app', 'Enter your e-mail address'), 'autofocus'=>true])->label('E-mail');?>

<div>
    <center><button type="submit" class="button_signup">Send</button></center>
</div>
<?php ActiveForm::end(); ?>
