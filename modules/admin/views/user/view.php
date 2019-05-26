<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Просмотр пользователя: ' . $model->user_name . ' ' . $model->user_surname;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
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
                            'confirm' => 'Вы действительно желаете удалить пользователя?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
            <div class="card-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'user_name',
                        'user_surname',
                        'email:email',
                        'phone',
                        [
                            'attribute' => 'country',
                            'value' => function($data)
                            {
                                return $data->countries->name;
                            },
                        ],
                        'region',
                        'city',
                        [
                            'attribute' => 'status',
                            'value' => !$model -> status ?
                                '<span class="text-danger">Не активирован</span>' : '<span class="text-success">Активирован</span>',
                            'format' => 'html',
                        ],
                        [
                            'attribute' => 'subscribe',
                            'value' => !$model -> subscribe ?
                                '<span class="text-danger">Не подписан</span>' : '<span class="text-success">Подписан</span>',
                            'format' => 'html',
                        ],
                        'date_update',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>