<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lots */

$this->title = $model->manufactured;
$this->params['breadcrumbs'][] = ['label' => 'Lots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lots-update">

    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['lots/']);?>"><i class="fa fa-arrow-left"></i></a></span>  Редактирование лота: <?= Html::encode($this->title) ?></h2>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
