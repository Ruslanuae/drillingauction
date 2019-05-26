<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use app\models\Cart;
use app\modules\admin\models\Products;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = 'STIGL - '.$productLease['manufacturer'].' '.$productLease['model']; ?>
<div>
    <div class=col-lg-6 col-md-6 col-sm-12 col-12 catalog">
        <?php
        $mainImg = $productLease->getImage();
        $gallery = $productLease->getImages();
        ?>
        <div class="row content page_prod">
            <h3><?= $productLease['manufacturer'].' '.$productLease['model'];?></h3>
            <div class="slider_auction">
                <?= Html::img($mainImg->getUrl())?>
                <!--Lets show the second image by default on page load-->
                <!--                        --><?php //$count = count($gallery); $i = 1; foreach($gallery as $img): $i++?>
                <?php $count = count($gallery); $i = 1; foreach($gallery as $img): $i++?>
                    <input type="radio" name="slide_switch" id="id<?=$i;?>"/>
                    <label for="id<?=$i;?>">
                        <?= Html::img($img->getUrl('100x75'), ['alt' => $productLease->manufacturer]) ?>
                    </label>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12 view_list">
        <div class="pd-fight-margin">
            <div class="pd-actions-wrapper">
                <div class="col-12 flex actions-fixed-wrapper-prod" style="">
                    <div class="left_banner_menu">
                        <div class="order_prod">
                            <p class="price_prod">If you are interested in information on this product for leasing a property, please contact the manager for additional questions. You can do this by clicking the button below: </p>
                            <form>
                                <!--                        <input type="text" value="1" class="form_order_qty" id="qty"/>-->
                                <input type="hidden" value="rent" class="form_order_qty sale_rent"/>
                            </form>
                            <a href="<?= Url::to(['cart/add', 'id'=>$productLease['id']])?>" data-id="<?= $productLease['id']?>" class="add_cart_prod"><i class="glyphicon glyphicon-list-alt"></i>Ask the manager</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sale-info-wrapper">
            <div class="sale-info-condensed">
                <div class="col-6 col-md-6">
                    <h3 class="sale-info-h3">Location: </h3><h4><?= $productLease['location'];?></h4>
                    <h5 class="sale-info-h3">on: <?= $productLease['date_posted'];?></h5>
                </div>
                <div class="col-6 col-md-6">
                    <h3 class="sale-info-h3">Date sale: </h3><h4><?= $productLease['date_sale'];?></h4>
                    <p class="timer">Time left:
                        <?php
                        $date1 = date('m/d/Y h:i:s a', time());
                        $date2 = $productLease['date_sale'];
                        $diff = abs(strtotime($date2) - strtotime($date1));
                        $years = floor($diff / (365*60*60*24));
                        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                        $time = gmmktime(0, 0, 0, $month, 1, $year); // первое число указанного года-месяца
                        $days =  gmdate("t", $time); // кол-во дней в месяце указанной даты
                        $days_for_hour = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                        $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days_for_hour*60*60*24)/ (60*60));
                        $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days_for_hour*60*60*24 - $hours*60*60)/ 60);
                        $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days_for_hour*60*60*24 - $hours*60*60 - $minuts*60));
                        printf("%d days, %d hours, %d minuts\n", $days + $days_for_hour, $hours, $minuts);
                        ?>
                    </p>
                </div>
            </div>
            <center>
                <p>Views this product: <?=$productLease['views']?></p>
            </center>
        </div>
        <div class="pd-vehicle-info-wrapper">
            <h2>Details</h2>
            <div class="tabs tab-vehicle waypoint-trigger" id="vehicletabDiv">
                <div class="row">
                    <div class="row flex">
                        <div class="col-md-5 col-label">
                            <p>Seller</p>
                        </div>
                        <div class="col-md-7 col-value">
                            <p><?= $productLease['seller'];?></p>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-md-5 col-label">
                            <p>Manufacturer</p>
                        </div>
                        <div class="col-md-7 col-value">
                            <p><?= $productLease['manufacturer'];?></p>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-md-5 col-label">
                            <p>Model</p>
                        </div>
                        <div class="col-md-7 col-value">
                            <p><?= $productLease['model'];?></p>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-md-5 col-label">
                            <p>Product Condition</p>
                        </div>
                        <div class="col-md-7 col-value">
                            <p><?= $productLease['product_condition'];?></p>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-md-5 col-label">
                            <p>Description</p>
                        </div>
                        <div class="col-md-7 col-value">
                            <p><?= $productLease['description'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div
    </div>
</div>
</div>