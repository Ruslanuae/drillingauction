<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoriesDrilling */

$this->title = 'Просмотрк услуги: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories Drilling', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                <p class="card-category">
                    <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-transparent']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно желаете удалить данную услугу?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
            <div class="card-body">
                <?php $img = $model->getImage();?>
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'name',
                        [
                            'attribute' => 'image',
                            'value' => "<img src='{$img->getUrl('100x83')}'>",
                            'format' => 'html',
                        ],
                        'description:html',
                        'service_left:html',
                        'service_right:html',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>