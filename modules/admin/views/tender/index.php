<?php
    
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TenderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тендеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                <p class="card-category">
                    <?= Html::a('Добавить тендер', ['create'], ['class' => 'btn btn-transparent']) ?>
                </p>
            </div>
            <div class="card-body">
                <?php Pjax::begin(); ?>
                <?= GridView::widget([
                     'dataProvider' => $dataProvider,
                     'filterModel' => $searchModel,
                    'options' => [
                        'class' => 'table-responsive',
                    ],
                    'tableOptions' => [
                        'class' => 'table',
                    ],
                     'columns' => [
                         'id',
                         [
                             'attribute' => 'tender_type_id',
                             'value' => function ($data) {
                                return $data['tenderTypes']['tender_type_name'];
                             }
                         ],
                         [
                             'attribute' => 'name_of_equipment_description',
                             'value' => 'name_of_equipment_description',
                             'format' => 'raw'
                         ],
                         [
                             'attribute' => 'desc_prv_text',
                             'value' => 'desc_prv_text',
                             'format' => 'raw'
                         ],

                         'rental_period',
                         //'starting_from_date',
                         //'end_destination',
                         //'requested_standard',
                         //'other_information:ntext',
                         //'requested_documents',
                         //'send_request',
                         //'looking_to_buy_before',
                         //'need_to_be_ready_before',
                         //'location_of_equipment',
                         //'type_of_certification',
                         [
                             'class' => 'yii\grid\ActionColumn',
                             'template' => '{view} {update} {delete}',
                             'headerOptions' => [
                                 'style' => 'width: 130px',
                                 'class' => 'text-primary',
                             ],
                             'header' => 'Действия',
                             'buttons' => [
                                 'view' => function($url, $model, $key) {     // render your custom button
                                     return '<a href="'.$url.'" class="btn btn-info btn-link btn-sm" data-original-title="View">
                                                <i class="material-icons">visibility</i>
                                                <div class="ripple-container"></div>
                                            </a>';
                                 },
                                 'update' => function($url, $model, $key) {     // render your custom button
                                     return '<a href="'.$url.'&filter='.$model->tender_type_id.'" class="btn btn-primary btn-link btn-sm" data-original-title="Edit">
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>';
                                 },
                                 'delete' => function($url, $model, $key) {     // render your custom button
                                     return '<a href="'.$url.'" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </a>';
                                 }
                             ]
                         ],
                     ],
                    'summary' => false,
                    'pager' => [
                        'prevPageLabel' => 'Previous',
                        'nextPageLabel' => 'Next',
                    ],
                ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>