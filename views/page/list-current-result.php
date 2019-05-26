<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Products;
$this->title = 'STIGL - Список товаров';
?>

<div class="col-md-12 catalog">
    <div class="row content">
        <div class="view_list">
            <div class="auction">
                <div class="desc_prod">
                    <p><h3>Sale List for: <?= $auctionData['location']?></h3></p>
                    <p><h5>Sale Date / Time: <?= date('m/d/Y H:i',(strtotime($auctionData['auc_date'])))?></h5></p>
                    <p><h5>In stock: <?php echo $count_lots;?></h5></p>

                    <table id="customers">
                        <thead>
                        <tr class="row100 head">
                            <th>Image</th>
                            <th># Lot</th>
                            <th>Sale Date</th>
                            <th>Manufactured</th>
                            <th>Model</th>
                            <th>Location</th>
                            <th>Current Bid</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lots as $lot_array):
                            $id_n = $lot_array['id'];
                            $query_n = Products::findOne($id_n);
                            $mainImg = $query_n -> getImage();?>
                            <tr>
                                <!--                                    <td><img class = "auction_img" src="/images/--><?php //echo $lot_array['img'];?><!--"/></td>-->
                                <td><?= Html::img($mainImg->getUrl('100x83'), ['alt' => $lot_array['manufacturer']]) ?></td>
                                <td><a href="http://<?=$_SERVER[HTTP_HOST]?><?=Url::toRoute(['page/lot', 'id' =>$lot_array['id']]);?>" target="_blank"><?= $lot_array['id'];?></a></td>
                                <td><?= $lot_array['date_sale'];?></td>
                                <td><?= $lot_array['manufacturer'];?></td>
                                <td><?= $lot_array['model'];?></td>
                                <td><?= $lot_array['location'];?></td>
                                <td><?php if(isset($lot_array['current_bid'])){echo 'Current Bid Sale: '.$lot_array['current_bid'];}?><br><?php if(isset($lot_array['current_bid_rent'])){echo  'Current Bid Rent: '.$lot_array['current_bid_rent'];}?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--END: Список-->
    </div>
</div>