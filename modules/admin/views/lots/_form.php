<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\HtmlPurifier;
use kartik\datetime\DateTimePicker;
use app\modules\admin\models\AuctionDate;
use app\modules\admin\models\LotsCategories;
use app\modules\admin\models\RateCondition;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lots */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lots-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $dropList = array();
        $lotCategories = LotsCategories::find()->asArray()->all();

        foreach ($lotCategories as $lotCategory)
        {
            $dropList[$lotCategory['id']]=$lotCategory['name'];
        }
        echo $form->field($model, 'id_category')->dropDownList($dropList, ['prompt' => ''])
    ?>

    <?= $form->field($model, 'manufactured')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_bid')->textInput() ?>

    <?= $form->field($model, 'bid_increment')->textInput() ?>

    <?= $form->field($model, 'fix_price')->textInput() ?>

    <?php
    $dropList = array();
    $rateConditions = RateCondition::find()->asArray()->all();

    foreach ($rateConditions as $rateCondition)
    {
        $dropList[$rateCondition['id']]=$rateCondition['name'];
    }
    echo $form->field($model, 'rate_condition')->dropDownList($dropList, ['prompt' => ''])
    ?>

<!--    --><?//= $form->field($model, 'rate_condition')->dropDownList([ '1' => 'Never Bid', '2' => 'Bid', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'rate_type')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'date_start')->textInput() ?>
    <?php echo $form->field($model, 'date_start')->widget(DateTimePicker::className(),
        [
            'name' => 'datetime_10',
            'options' => ['placeholder' => 'Выберите дату ...'],
            'convertFormat' => true,
            'pluginOptions' => [
                'format' => 'php: Y-m-d H:i:s',
                'startDate' => '2018-06-01 12:00:00',
                'todayHighlight' => true
            ]
        ]);
    ?>
    <?php
        $dropList = array();
        $aucDates = AuctionDate::find()->asArray()->all();

        foreach ($aucDates as $aucDate)
        {
            $dropList[$aucDate['id']]=$aucDate['auc_date'];
        }
        echo $form->field($model, 'date_sale')->dropDownList($dropList, ['prompt' => ''])
    ?>


    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'lot_condition')->textInput() ?>
    <?= $form->field($model, 'lot_condition')->dropDownList([ '1' => 'Sale', '2' => 'Sold', '3' => 'Not Sale', ], ['prompt' => '']) ?>

<!--    --><?//= $form->field($model, 'product_condition')->textInput() ?>
    <?= $form->field($model, 'product_condition')->dropDownList([ '1' => 'New', '2' => 'Used', ], ['prompt' => '']) ?>

<!--    --><?//= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

<!--    --><?//= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?php echo $form->field($model, 'description')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
    ]);?>

    <?= $form->field($model, 'visible')->dropDownList([ '0' => 'Не отображать на сайте', '1' => 'Отображать на сайте', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
