<?php
    
    use yii\helpers\Html;
    use yii\widgets\DetailView;
    
    /* @var $this yii\web\View */
    /* @var $model app\models\Tender */
    
    $this->title = $model->id;
    $this->params['breadcrumbs'][] = ['label' => 'Tenders', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
    \yii\web\YiiAsset::register($this);
    ?>
<div class="tender-view">


<?php if ($type == 1): ?>

<?= DetailView::widget([
                       'model' => $model,
                       'attributes' => [
                       'id',
                       [
                       'attribute' => 'tender_type_id',
                       'value' => function ($data) {
                       return $data['tenderTypes']['tender_type_name'];
                       }
                       ],
                       'name_of_equipment_description:html',
                       'desc_prv_text:html',
                       'rental_period',
                       'starting_from_date',
                       'end_destination',
                       'requested_standard',
                       'other_information:html',
                       'requested_documents',
                       'send_request',
                       ],
                       ]) ?>
<?php endif; ?>
<?php if ($type == 2): ?>

<?= DetailView::widget([
                       'model' => $model,
                       'attributes' => [
                       'id',
                       [
                       'attribute' => 'tender_type_id',
                       'value' => function ($data) {
                       return $data['tenderTypes']['tender_type_name'];
                       }
                       ],
                       'name_of_equipment_description:html',
                       'desc_prv_text:html',
                       'looking_to_buy_before',
                       'end_destination',
                       'requested_standard',
                       'other_information:html',
                       'requested_documents',
                       'send_request',
                       ],
                       ]) ?>
<?php endif; ?>
<?php if ($type == 3): ?>

<?= DetailView::widget([
                       'model' => $model,
                       'attributes' => [
                       'id',
                       [
                       'attribute' => 'tender_type_id',
                       'value' => function ($data) {
                       return $data['tenderTypes']['tender_type_name'];
                       }
                       ],
                       'name_of_equipment_description:html',
                       'desc_prv_text:html',
                       'need_to_be_ready_before',
                       'location_of_equipment',
                       'type_of_certification',
                       'other_information:ntext',
                       'send_request',
                       ],
                       ]) ?>
<?php endif; ?>

</div>
