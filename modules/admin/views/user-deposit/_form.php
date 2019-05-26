<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UserDeposite */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<?php
$dropList = array();
$UserDeposite = User::find()->asArray()->all();
foreach ($UserDeposite as $userDeposite)
{
    $dropList[$userDeposite['id']] = $userDeposite['user_name']. "  " .$userDeposite['user_surname'];
}
echo $form->field($model, 'user_id')->dropDownList($dropList, ['prompt' => ''])
?>

<?= $form->field($model, 'deposit')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>