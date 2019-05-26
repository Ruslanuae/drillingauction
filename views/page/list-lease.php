<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;
$this->title = 'STIGL - '.$categoriesLease['name'].'';
?>
<div>
    <div>
        <div class="col-md-12 col-sm-12 col-12 header_list_prod">
            <div class="row">
                <div class="col-md-3">
                    <h1><?php echo $categoriesLease['name'];?></h1>
                </div>
                <div class="col-md-5">
                    <div class="sortirovka-wrapper">
                        <div class="sortirovka">
                            <a id="param_order" class="results-sort-top"><?=$order_p[$valueOrder][0]?> <?=($order_p[$valueOrder][2] == "ASC") ? '<img src="../../web/images/sort_up.png" class="sort-img">' : '<img src="../../web/images/sort_down.png" class="sort-img">'?>  <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <div class="results-sort-wrap" style="display:none">
                                <?php foreach($order_p as $key => $val): ?>
                                    <?php if($val[0] == $order) continue; ?>
                                    <a href="<?=Url::toRoute(['page/list-lease', 'id' => $categories['id'], 'order' => $key]);?>">
                                        <?=$val[0]?>
                                        <?=($val[2] == "ASC") ? '<img src="../../web/images/sort_up.png" class="sort-img">' : '<img src="../../web/images/sort_down.png" class="sort-img">'?>
                                    </a>
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 value_prod">
                    <p>In stock: <?php echo $count_lease;?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 left_banner_menu">
            <h3>List of categories: </h3>
            <a href="<?=Url::toRoute(['page/all-catalog-lease']);?>">All products</br></a>
            <?php foreach ($categoriesAll as $categoryOne):?>
                <a href="<?=Url::toRoute(['page/list-lease', 'id' =>$categoryOne['id']]);?>"><?php echo $categoryOne['name'];?></br></a>
            <?php endforeach;?>
        </div>
        <div class="col-md-9">
            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                <ul>
                    <?php foreach ($lease_array as $lease): ?>
                        <?php $mainImg = $lease->getImage(); ?>
                        <li>
                            <a class="cbp-vm-image" href="<?=Url::toRoute(['page/product-lease', 'id' =>$lease['id']]);?>"><?= Html::img($mainImg->getUrl(), ['alt' =>  $lease['manufacturer'].' '.$lease['model']]); ?></a>
                            <a class="cbp-vm-title-link" href="<?=Url::toRoute(['page/product-lease', 'id' =>$lease['id']]);?>"><h3 class="cbp-vm-title"><?php echo  \yii\helpers\StringHelper::truncate($lease['manufacturer'].' '.$lease['model'], 23, '...');?></h3></a>
                            <div class="cbp-vm-price"><?php echo $lease['price'];?></div>
                            <input type="hidden" value="rent" class="form_order_qty sale_rent"/>
                            <a class="cbp-vm-icon cbp-vm-add cart" href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $lease['id']])?>" data-id="<?=$lease['id']?> ">Ask the manager</a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <center><?php echo \yii\widgets\LinkPager::widget(['pagination' => $pages, ]); ?></center>
</div>