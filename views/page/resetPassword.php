<?php
$this->title = 'STIGL - Reset Password';
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResetPasswordForm */
/* @var $form ActiveForm */
?>
<div class="page-resetPassword">

    <?php $form = ActiveForm::begin(['class'=>'login', 'id'=>'login']); ?>

        <?= $form->field($model, 'password')->passwordInput()?>
    
        <div class="form-group">
            <center><?= Html::submitButton('Reset', ['class' => 'button_login']) ?></center>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- page-resetPassword -->
