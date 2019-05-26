<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Products;
$this->title = 'STIGL - '.$lots_categories['name'].'';
?>
<div>
    <div>
        <div class="col-md-12 header_list_prod">
            <div class="row">
                <div class="col-md-3">
                    <h1><?=$lots_categories['name'];?></h1>
                </div>
                <div class="col-md-9 value_prod">
                    <p>In stock: <?= $count_lots;?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 left_banner_menu">
            <form id="search-lot" method="get" class="search_top" data="pjax">
                <input type="text" id="seacrh" class="search_lot" name="search" placeholder="Search by lot#, lot description" aria-invalid="false" value="<?=$q?>">
                <button type="submit" class = "search_btn" id="seacrh"><i class="glyphicon glyphicon-search"></i></button>
            </form>
            <h3>List of categories: </h3>
            <a href="<?=Url::toRoute(['page/auction-catalog']);?>">All Lots</br></a>
            <?php foreach ($lots_categories_all as $lot_category):?>
                <a href="<?=Url::toRoute(['page/list-lots', 'id' =>$lot_category['id']]);?>"><?php echo $lot_category['name'];?></br></a>
            <?php endforeach;?>
            <h3>Filters: </h3>
            <?php if(isset($chara_cat)):?>
                <div class="sidebar-inner">
                    <?php foreach($chara_cat as $item):?>
                        <div class="facet">
                            <div class="facet-heading"><span><?=$item['name']?></span></div>
                            <ul class="facet-list">
                                <?php foreach($subchara_cat as $subitem):?>
                                    <?php if($subitem['parent_id'] == $item['id']): ?>
                                        <?php if(isset($sort) && count($sort) > 1): ?>
                                            <?php $s = $sort; unset($s[array_search($subitem['alias'], $s)]); $val = implode("+", $s); ?>
                                            <?php if(in_array($subitem['alias'], $sort)): ?>
                                                <li class="facet-value-li"><a href="?sort=<?=$val?>" class="selected"><?=$subitem['name']?></a></li>
                                            <?php else: ?>
                                                <li class="facet-value-li"><a href="?sort=<?=$sortstr.'+'.$subitem['alias']?>" class="selected"><?=$subitem['name']?></a></li>
                                            <?php endif; ?>
                                        <?php elseif(isset($sort) && count($sort) == 1): ?>
                                            <?php if(in_array($subitem['alias'], $sort)): ?>
                                                <li class="facet-value-li"><a href="/page/all-catalog" class="selected"><?=$subitem['name']?></a></li>
                                            <?php else: ?>
                                                <li class="facet-value-li"><a href="?sort=<?=$sortstr.'+'.$subitem['alias']?>" class="selected"><?=$subitem['name']?></a></li>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <li class="facet-value-li"><a href="?sort=<?=$subitem['alias']?>" class="selected"><?=$subitem['name']?></a></li>
                                        <?php endif;?>
                                    <?php endif; ?>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-9">
            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                <ul>
                    <?php foreach ($lots_array as $lot_array):?>
                        <?php
                        $id_n = $lot_array['id'];
                        $query_n = Products::findOne($id_n);
                        $mainImg = $query_n -> getImage();
                        ?>
                        <li>
                            <a class="cbp-vm-image" href="<?=Url::toRoute(['page/lot', 'id' =>$lot_array['id']]);?>"><?= Html::img($mainImg->getUrl(), ['alt' =>  $lot_array['manufacturer'].' '.$lot_array['model']]); ?></a>
                            <a class="cbp-vm-title-link" href="<?=Url::toRoute(['page/lot', 'id' =>$lot_array['id']]);?>"><h3 class="cbp-vm-title"><?php echo  \yii\helpers\StringHelper::truncate($lot_array['manufacturer'].' '.$lot_array['model'], 23, '...');?></h3></a>
                            <div class="cbp-vm-price"><h5>Date Sale: <?= $lot_array['date_sale'];?></h5></div>
                            <div class="cbp-vm-price"><h5>Location: <?= $lot_array['location'];?></h5></div>
                            <!--                    <a href="--><?//=Url::toRoute(['page/lot', 'id' =>$lot_array['id']]);?><!--" class="bid-now">Bid Now</a>-->
                            <a class="cbp-vm-icon cbp-vm-add" href="<?=Url::toRoute(['page/lot', 'id' =>$lot_array['id']]);?>">Bid Now</a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <center><?= \yii\widgets\LinkPager::widget(['pagination' => $pages, ]); ?></center>
</div>