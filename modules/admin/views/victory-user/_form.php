<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Products;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\VictoryUser */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>


<?php
$dropList = array();
$products = Products::find()->asArray()->all();
foreach ($products as $product)
{
    $dropList[$product['id']] = $product['manufacturer']. "  " .$product['model'];
}
echo $form->field($model, 'num_lot')->dropDownList($dropList, ['prompt' => ''])
?>
<?php
$dropList = array();
$Users = User::find()->asArray()->all();
foreach ($Users as $User)
{
    $dropList[$User['id']] = $User['user_name']. "  " .$User['user_surname'];
}
echo $form->field($model, 'buyer')->dropDownList($dropList, ['prompt' => ''])
?>

<?= $form->field($model, 'bid_buyer')->textInput() ?>

<?= $form->field($model, 'bid_type')->dropDownList([ 'rent' => 'Rent', 'sale' => 'Sale', ], ['prompt' => '']) ?>

<?= $form->field($model, 'bid_date')->textInput() ?>

<!--    <div class="form-group">-->
<!--        --><?//= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
<!--    </div>-->

<?php ActiveForm::end(); ?>
