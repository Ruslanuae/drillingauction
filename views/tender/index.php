<?php
    
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Pjax;
    
    /* @var $this yii\web\View */
    /* @var $dataProvider yii\data\ActiveDataProvider */
    
    $this->title = 'Tenders';
    $this->params['breadcrumbs'][] = $this->title;
    ?>
<div class="tender-index">


<?php Pjax::begin(); ?>

<p style="text-align: center">

<?= Html::a('ALL', ['/tender/index'], ['class' => 'btn btn-primary']) ?>

<?= Html::a('RENT', ['tender/filter?id=1'], ['class' => 'btn btn-primary']) ?>

<?= Html::a('BUYING', ['tender/filter?id=2'], ['class' => 'btn btn-primary']) ?>

<?= Html::a('REPAIRS', ['tender/filter?id=3'], ['class' => 'btn btn-primary']) ?>

</p>

<?= GridView::widget([
                     'id'=>'auction_list',
                     'dataProvider' => $dataProvider,
                     'pager' => ['options' => ['style'=> 'color:red']],
                     'columns' => [
                     
                     ['class' => 'yii\grid\SerialColumn'],
                     
                     [
                     'attribute' => 'tender_type_id',
                     'value' => function ($data) {
                     return $data['tenderTypes']['tender_type_name'];
                     }
                     ],
                     [
                     'attribute' => 'desc_prv_text',
                     'value' => function ($data) {
                     return "<a href='" . \yii\helpers\Url::to(['/tender/view/?id=' . $data['id']]) . '&type='.$data['tenderTypes']['id'].''."'>" . $data['desc_prv_text'] . "</a>";
                     },
                     'format' => 'raw'
                     ],
                     
                     //'rental_period',
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
                     
                     ],
                     ]); ?>
<?php Pjax::end(); ?>
</div>
