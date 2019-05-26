<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ImportMail */

$this->title = 'Просмотр: ' . $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Import Mails', 'url' => ['index']];
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
                            'confirm' => 'Вы действительно желаете удалить данную запись?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
            <div class="card-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'email:email',
                        [
                            'attribute' => 'subscribe',
                            'value' => !$model -> subscribe ?
                                '<span class="text-danger">Не подписан</span>' : '<span class="text-success">Подписан</span>',
                            'format' => 'html',
                        ],
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>