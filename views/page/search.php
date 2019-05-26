<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Products;

$this->title = 'STIGL - Search: ' . $q;
?>
<div class="col-md-12 col-sm-12 col-12">
    <!--<div class="short_description">
        <h2 class="title text-center">You search: "<?/*= $q */?>"</h2>
    </div>-->
    <div class="row content" style="padding-top: 30px;padding-bottom: 30px;">
        <?php if ($q == ""): ?>
            <h2>You specified an empty search query!</h2>
        <?php else: ?>
            <div class="col-md-12">
                <h2>Searching results: </h2>
                <?php if (!$products_array): ?>
                    <p>Not found!</p>
                <?php else: ?>
                    <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                        <ul>
                            <?php foreach ($products_array as $product_array): ?>
                                <?php
                                $id_n = $product_array['id'];
                                $query_n = Products::findOne($id_n);
                                $mainImg = $query_n->getImage();
                                ?>
                                <li>
                                    <a class="cbp-vm-image"
                                       href="<?= Url::toRoute(['page/product', 'id' => $product_array['id']]); ?>"><?= Html::img($mainImg->getUrl(), ['alt' => $product_array['manufacturer'] . ' ' . $product_array['model']]); ?></a>
                                    <a class="cbp-vm-title-link"
                                       href="<?= Url::toRoute(['page/product', 'id' => $product_array['id']]); ?>"><h3
                                                class="cbp-vm-title"><?php echo \yii\helpers\StringHelper::truncate($product_array['manufacturer'] . ' ' . $product_array['model'], 23, '...'); ?></h3>
                                    </a>
                                    <div class="cbp-vm-price"><?php echo $product_array['price']; ?></div>
                                    <input type="hidden" value="sale" class="form_order_qty sale_rent"/>
                                    <a class="cbp-vm-icon cbp-vm-add cart"
                                       href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product_array['id']]) ?>"
                                       data-id="<?= $product_array['id'] ?> ">Ask the manager</a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div class="clearfix"></div>
            <center><?php echo \yii\widgets\LinkPager::widget(['pagination' => $pages,]); ?></center>
        <?php endif; ?>
    </div>
</div>