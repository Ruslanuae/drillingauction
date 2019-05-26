<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UserDeposite */

$this->title = 'Просмотр депозита пользователя: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Deposites', 'url' => ['index']];
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
                            'confirm' => 'Вы действительно желаете удалить дданный депозит?',
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
                        [
                            'attribute' => 'user_id',
                            'value' => function($data)
                            {
                                return $data->users->user_name." ".$data->users->user_surname;
                            },
                        ],
                        'deposit',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>