<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lots */

$this->title = 'Создать новый лот';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lots-create">

    <h2><span class="auction_head_title"><a href="<?=yii\helpers\Url::toRoute(['lots/']);?>"><i class="fa fa-arrow-left"></i></a></span>  <?= Html::encode($this->title) ?></h2>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
