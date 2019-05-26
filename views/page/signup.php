<?php

/* @var $this yii\web\View */

use \yii\widgets\ActiveForm;

$this->title = 'STIGL - Sign Up';
?>
<!--<h2>Регистрация</h2>-->
<!--    $form->field($model, 'text')->textInput()->hint('Введите любой текст')->label('Текстовое поле');-->
<?php $form = ActiveForm::begin(['class' => 'signup', 'id' => 'signup']); ?>
<?= $form->field($model, 'user_name')->textInput(['placeholder' => Yii::t('app', 'Enter your name'), 'autofocus' => true])->label('First Name'); ?>
<?= $form->field($model, 'user_surname')->textInput(['placeholder' => Yii::t('app', 'Enter your last name'), 'autofocus' => true])->label('Last Name'); ?>
<?php
if ($model->scenario === 'emailActivation'):
    ?>
    <i>* An email will be sent to this email to activate your account.</i>
<?php
endif;
?>
<?= $form->field($model, 'email')->textInput(['placeholder' => Yii::t('app', 'Enter your e-mail address'), 'autofocus' => true])->label('E-mail'); ?>
<?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('app', 'Enter password'), 'autofocus' => true])->label('Password'); ?>
<?= $form->field($model, 'phone')->textInput(['placeholder' => Yii::t('app', 'Enter your phone'), 'autofocus' => true])->label('Phone'); ?>
 <!--//= $form->field($model, 'country')->textInput(['placeholder' => Yii::t('app', 'Enter your country'), 'autofocus'=>true])->label('Country');-->
<?php $dropList = array();
foreach ($countries as $country) {
    $dropList[$country['id']] = $country['name'];
}
echo $form->field($model, 'country')->dropDownList($dropList, ['prompt' => 'Country']) ?>


<?= $form->field($model, 'region')->textInput(['placeholder' => Yii::t('app', 'Enter your region'), 'autofocus' => true])->label('Region'); ?>
<?= $form->field($model, 'city')->textInput(['placeholder' => Yii::t('app', 'Enter your city'), 'autofocus' => true])->label('City'); ?>
<div>
    <center>
        <button type="submit" class="button_signup">Sign Up</button>
    </center>
</div>
<?php ActiveForm::end(); ?>


