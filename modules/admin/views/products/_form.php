<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\AuctionDate;
use app\modules\admin\models\Categories;
use vova07\imperavi\Widget as Redactor;

?>
<?php $form = ActiveForm::begin(); ?>
<?php $dropList = array();
$categories = Categories::find()->asArray()->all();
foreach ($categories as $category) {
    $dropList[$category['id']] = $category['name'];
}
echo $form->field($model, 'category')->dropDownList($dropList, ['prompt' => 'Date ... ']) ?>
<?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'gallery[]', [
    'template' => '
    <div class="form-file-multiple">
        {input}
        <div class="input-group">
            <input type="text" class="form-control inputFileVisible" placeholder="Изображения">
            <span class="input-group-btn">
                <button type="button" class="btn btn-fab btn-round btn-primary">
                    <i class="material-icons">attach_file</i>
                </button>
            </span>
        </div>
    </div>'
])->fileInput([
    'accept' => 'image/*',
    'class' => 'inputFileHidden',
    'multiple' => true,
]) ?>
<?= $form->field($model, 'current_bid')->textInput() ?>
<?= $form->field($model, 'bid_increment')->textInput() ?>
<?= $form->field($model, 'current_bid_rent')->textInput() ?>
<?= $form->field($model, 'bid_increment_rent')->textInput() ?>
<?= $form->field($model, 'date_start')->textInput([
    'class' => 'form-control datetimepicker',
]);
?>
<?php
$dropList = array();
$aucDates = AuctionDate::find()->asArray()->all();
foreach ($aucDates as $aucDate) {
    $dropList[$aucDate['id']] = $aucDate['auc_date'];
}
echo $form->field($model, 'date_sale')->dropDownList($dropList, [
    'options' => [
        $aucDate['auc_date'] => ['selected' => true],
        'prompt' => 'Selected  ...',
    ]
]) ?>
<?= $form->field($model, 'lot_condition')->dropDownList(['1' => 'Sale', '2' => 'Sold', '3' => 'Not Sale',], ['prompt' => '']) ?>
<?= $form->field($model, 'product_condition')->dropDownList(['1' => 'New', '2' => 'Used','3'=>'Certified'], ['prompt' => '']) ?>
<?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'seller')->textInput(['maxlength' => true]) ?>

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

<?= $form->field($model, 'contact_name')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'visible')->dropDownList(['0' => 'Не отображать на сайте', '1' => 'Отображать на сайте',], ['prompt' => '']) ?>
<?= $form->field($model, 'prd_cat_view')->radioList([
    '0' => 'Бурения',
    '1' => 'Ремонт',
    '2' => 'Продажа',
    '3' => 'Аренда',
    '4' => 'Аукцион',
], [
    'item' => function ($index, $label, $name, $checked, $value) {
        return '
            <div class="form-check form-check-radio form-check-inline">
                <label class="form-check-label">
                    '.Html::radio($name, $checked, [
                'class' => 'form-check-input',
                'value' => $value
            ]).
            $label.'
                    <span class="circle">
                        <span class="check"></span>
                    </span>
                </label>
            </div>
        ';
    }
]) ?>
<div class="form-group">
    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
