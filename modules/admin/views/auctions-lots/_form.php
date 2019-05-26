<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\AuctionDate;
use app\modules\admin\models\Products;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AuctionsLots */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<?//= $form->field($model, 'auc_id')->textInput() ?>
<?php
$dropList = array();
$auctionDates = AuctionDate::find()->asArray()->all();
foreach ($auctionDates as $auctionDate)
{
    $dropList[$auctionDate['id']] = $auctionDate['auc_date']. " / " .$auctionDate['location'];
}
echo $form->field($model, 'auc_id')->dropDownList($dropList, ['prompt' => ''])
?>

<?php
$product = Products::findOne($model->lot_id);
echo 'Продукт:';
dd($product->manufacturer.' '.$product->model);
?>

<?//= $form->field($model, 'lot_id')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>