<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Products;
use yii\data\Pagination;

$this->title = 'STIGL - All Products';
?>
<div>
    <div>
        <div class="col-md-12 header_list_prod">
            <div class="row">
                <div class="col-md-3">
                    <h1>All Products</h1>
                </div>
                <div class="col-md-5">
                    <div class="sortirovka-wrapper">
                        <div class="sortirovka">
                            <a id="param_order"
                               class="results-sort-top"><?= $order_p[$valueOrder][0] ?> <?= ($order_p[$valueOrder][2] == "ASC") ? '<img src="../../web/images/sort_up.png" class="sort-img">' : '<img src="../../web/images/sort_down.png" class="sort-img">' ?>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <div class="results-sort-wrap" style="display:none">
                                <?php foreach ($order_p as $key => $val): ?>
                                    <?php $parse_order = parse_str($query, $params_order);
                                    unset($params_order['order']);
                                    $url = http_build_query($params_order); ?>
                                    <?php if ($val[0] == $order) continue; ?>
                                    <?php if ($url): ?>
                                        <a href="?<?= $url . '&order=' . $key ?>">
                                            <?= $val[0] ?>
                                            <?= ($val[2] == "ASC") ? '<img src="../../web/images/sort_up.png" class="sort-img">' : '<img src="../../web/images/sort_down.png" class="sort-img">' ?>
                                        </a>
                                    <? else: ?>
                                        <a href="<?= $url . '?order=' . $key ?>">
                                            <?= $val[0] ?>
                                            <?= ($val[2] == "ASC") ? '<img src="../../web/images/sort_up.png" class="sort-img">' : '<img src="../../web/images/sort_down.png" class="sort-img">' ?>
                                        </a>
                                    <? endif; ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 value_prod">
                    <p>In stock: <?php echo $count_products; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 left_banner_menu">
            <h3>Filters: </h3>
            <?php if (isset($chara_cat)): ?>
                <div class="sidebar-inner">
                    <?php foreach ($chara_cat as $item): ?>
                        <div class="facet">
                            <div class="facet-heading"><span><?= $item['name'] ?></span></div>
                            <ul class="facet-list">
                                <?php $parse_sort = parse_str($query, $params_sort);
                                unset($params_sort['sort']);
                                $url = http_build_query($params_sort); ?>
                                <?php foreach ($subchara_cat as $subitem): ?>
                                    <?php if ($subitem['parent_id'] == $item['id']): ?>
                                        <?php if (isset($sort) && count($sort) > 1): ?>
                                            <?php $s = $sort;
                                            unset($s[array_search($subitem['alias'], $s)]);
                                            $val = implode("+", $s); ?>
                                            <?php if ($url): ?>
                                                <?php if (in_array($subitem['alias'], $sort)): ?>
                                                    <li class="facet-value-li"><a href="?<?= $url . '&sort=' . $val ?>"
                                                                                  class="selected"><?= $subitem['name'] ?></a>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="facet-value-li"><a
                                                                href="?<?= $url . '&sort=' . $sortstr . '+' . $subitem['alias'] ?>"><?= $subitem['name'] ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if (in_array($subitem['alias'], $sort)): ?>
                                                    <li class="facet-value-li"><a href="<?= $url . '?sort=' . $val ?>"
                                                                                  class="selected"><?= $subitem['name'] ?></a>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="facet-value-li"><a
                                                                href="<?= $url . '?sort=' . $sortstr . '+' . $subitem['alias'] ?>"><?= $subitem['name'] ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php elseif (isset($sort) && count($sort) == 1): ?>
                                            <?php if ($url): ?>
                                                <?php if (in_array($subitem['alias'], $sort)): ?>
                                                    <li class="facet-value-li"><a href="?<?= $url ?>"
                                                                                  class="selected"><?= $subitem['name'] ?></a>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="facet-value-li"><a
                                                                href="?<?= $url . '&sort=' . $sortstr . '+' . $subitem['alias'] ?>"><?= $subitem['name'] ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if (in_array($subitem['alias'], $sort)): ?>
                                                    <li class="facet-value-li"><a href="/page/all-catalog"
                                                                                  class="selected"><?= $subitem['name'] ?></a>
                                                    </li>
                                                <?php else: ?>
                                                    <li class="facet-value-li"><a
                                                                href="<?= $url . '?sort=' . $sortstr . '+' . $subitem['alias'] ?>"><?= $subitem['name'] ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if ($url): ?>
                                                <li class="facet-value-li"><a
                                                            href="?<?= $url . '&sort=' . $subitem['alias'] ?>"><?= $subitem['name'] ?></a>
                                                </li>
                                            <?php else: ?>
                                                <li class="facet-value-li"><a
                                                            href="<?= $url . '?sort=' . $subitem['alias'] ?>"><?= $subitem['name'] ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-9">
            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                <ul>
                    <?php foreach ($products_array as $product_array): ?>
                        <?php
                        if ($product_array['id']) {
                            $id_n = $product_array['id'];
                            $query_n = Products::findOne($id_n);
                            $mainImg = $query_n->getImage();
                            ?>
                            <li>
                                <a class="cbp-vm-image"
                                   href="<?= Url::toRoute(['page/product-lease', 'id' => $product_array['id']]); ?>">
                                    <?= Html::img(Products::findOne($product_array['id'])->getImage()->getUrl(), ['alt' => $product_array['manufacturer'] . ' ' . $product_array['model']]); ?>
                                    <?= Html::img(Products::findOne($product_array['id'])->getImage()->getUrl(), ['class' => 'big-img', 'alt' => $product_array['manufacturer'] . ' ' . $product_array['model']]); ?>
                                </a>
                                <a class="cbp-vm-title-link"
                                   href="<?= Url::toRoute(['page/product-lease', 'id' => $product_array['id']]); ?>"><h3
                                            class="cbp-vm-title"><?php echo \yii\helpers\StringHelper::truncate($product_array['manufacturer'] . ' ' . $product_array['model'], 23, '...'); ?></h3>
                                </a>
                                <div class="cbp-vm-price"><?php echo $product_array['price']; ?></div>
                                <input type="hidden" value="rent" class="form_order_qty sale_rent"/>
                                <a class="cbp-vm-icon cbp-vm-add cart"
                                   href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product_array['id']]) ?>"
                                   data-id="<?= $product_array['id'] ?> ">Ask the manager</a>
                            </li>
                    <?php }
                    endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--    <center>--><?php //echo \yii\widgets\LinkPager::widget(['pagination' => $pages, ]); ?><!--</center>-->
</div>