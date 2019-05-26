<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Products;
use yii\data\Pagination;

$this->title = 'STIGL - All Products';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parsed = parse_url($url);
$query = $parsed['query'];
$parse_str = parse_str($query, $params);
?>
<div class="row">
    <div class="col-md-3">
        <?php if (isset($chara_cat)): ?>
            <div class="sidebar-inner">
                <?php foreach ($chara_cat as $item): ?>
                    <div class="facet">
                        <div class="facet-heading"><span><?= $item['name'] ?></span></div>
                        <ul class="facet-list">
                            <?php
                            $parse_sort = parse_str($query, $params_sort);
                            unset($params_sort['sort']);
                            $url = http_build_query($params_sort);
                            ?>
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
        <div class="row sorting">
            <div class="col-md-6">
                <h4>In stock: <?=$count_products?></h4>
            </div>
            <div class="col-md-6 text-right">
                <div class="dropdown">
                    <a id="param_order"
                       class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $order_p[$valueOrder][0] ?> <?= ($order_p[$valueOrder][2] == "ASC") ? '<img src="../../web/images/sort_up.png" class="sort-img">' : '<img src="../../web/images/sort_down.png" class="sort-img">' ?>
                    </a>
                    <div class="dropdown-menu text-right" aria-labelledby="param_order">
                        <?foreach ($order_p as $key => $val) {?>
                            <?$parse_order = parse_str($query, $params_order);
                            unset($params_order['order']);
                            $url = http_build_query($params_order);
                            if ($val[0] == $order) continue;
                            if ($url) {?>
                                <a class="dropdown-item" href="?<?= $url . '&order=' . $key ?>">
                                    <?= $val[0] ?>
                                    <?= ($val[2] == "ASC") ? '<img src="../../web/images/sort_up.png" class="sort-img">' : '<img src="../../web/images/sort_down.png" class="sort-img">' ?>
                                </a>
                            <?} else {?>
                                <a class="dropdown-item" href="<?= $url . '?order=' . $key ?>">
                                    <?= $val[0] ?>
                                    <?= ($val[2] == "ASC") ? '<img src="../../web/images/sort_up.png" class="sort-img">' : '<img src="../../web/images/sort_down.png" class="sort-img">' ?>
                                </a>
                            <?}?>
                        <?}?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row catalog">
            <?foreach ($products as $product_array) {
                if ($product_array['id']) { ?>
                    <div class="col-md-4 text-center product">
                        <a class="cbp-vm-image"
                           href="<?= Url::toRoute(['page/product', 'id' => $product_array['id']]); ?>">
                            <?php
                            echo Html::img(Products::findOne($product_array['id'])->getImage()->getUrl(), ['alt' => $product_array['manufacturer'] . ' ' . $product_array['model'], 'class' => 'img-fluid']);
                            //echo Html::img(Products::findOne($product_array['id'])->getImage()->getUrl(), ['class' => 'big-img', 'alt' => $product_array['manufacturer'] . ' ' . $product_array['model']]); ?>
                        </a>
                        <a class="cbp-vm-title-link"
                           href="<?= Url::toRoute(['page/product', 'id' => $product_array['id']]); ?>"><h3
                                    class="cbp-vm-title"><?php echo \yii\helpers\StringHelper::truncate($product_array['manufacturer'] . ' ' . $product_array['model'], 23, '...'); ?></h3>
                        </a>
                        <div class="cbp-vm-price"><?php echo $product_array['price']; ?></div>
                        <input type="hidden" value="sale" class="form_order_qty sale_rent"/>
                        <a class="btn btn-primary"
                           href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product_array['id']]) ?>"
                           data-id="<?= $product_array['id'] ?> ">Ask the manager</a>
                    </div>
                <?}
            }?>
        </div>
    </div>
</div>