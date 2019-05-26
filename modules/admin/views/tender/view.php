<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tender */

$this->title = 'Просмотр тендера: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tenders', 'url' => ['index']];
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
                            'confirm' => 'Вы действительно желаете удалить данный тендер?',
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
                        'tender_type_id',
                        'name_of_equipment_description:html',
                        'desc_prv_text:html',
                        'rental_period',
                        'starting_from_date',
                        'end_destination',
                        'requested_standard',
                        'other_information:ntext',
                        'requested_documents',
                        'send_request',
                        'looking_to_buy_before',
                        'need_to_be_ready_before',
                        'location_of_equipment',
                        'type_of_certification',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>