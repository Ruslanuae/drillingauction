<?php
/* @var $this yii\web\View */

use \yii\widgets\ActiveForm;
use  \yii\helpers\Html;

$this->title = 'STIGL - Login';
?>
    <!--<h2>Вход</h2>-->
<?php $form = ActiveForm::begin(['class' => 'login', 'id' => 'login']); ?>
<?= $form->field($model, 'email')
    ->textInput(['placeholder' => Yii::t('app', 'Enter your email address'), 'autofocus' => true])->label('Email address'); ?>
<?= $form->field($model, 'password')
    ->passwordInput(['placeholder' => Yii::t('app', 'Enter your password'), 'autofocus' => true])->label('Password'); ?>
<?= $form->field($model, 'rememberMe')
    ->checkbox(['template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",]); ?>
<?= Html::a('Do not have an account? Sign up', ['/page/signup']) ?>
    </br>
<?= Html::a('Forgot your password?', ['/page/send-email']) ?>

    <div>
        <center>
            <button type="submit" class="button_login">Log In</button>
        </center>
    </div>
<?php ActiveForm::end(); ?>