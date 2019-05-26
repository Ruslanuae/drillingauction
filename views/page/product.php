<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'STIGL - ' . $product['manufacturer'] . ' ' . $product['model']; ?>
<div class="row">
    <div class="col-md-6 col-sm-12 col-12 catalog">
        <?php
        $mainImg = $product->getImage();
        $gallery = $product->getImages();
        ?>
        <div class="text-center" style="margin-top: 50px;">
            <div class="lot">LOT #1<span><img src="/images/prosmotr.png"> <?= $product['views'] ?></span></div>
            <h3><?= $product['manufacturer'] . ' ' . $product['model']; ?></h3>
            <div class="slider_auction">
                <?= Html::img($mainImg->getUrl(), ['class' => 'img-fluid']) ?>
                <!--Lets show the second image by default on page load-->
                <!--                        --><?php //$count = count($gallery); $i = 1; foreach($gallery as $img): $i++?>
                <?php $count = count($gallery);
                $i = 1;
                foreach ($gallery as $img): $i++ ?>
                    <input type="radio" name="slide_switch" id="id<?= $i; ?>"/>
                    <label for="id<?= $i; ?>">
                        <?= Html::img($img->getUrl('100x75'), ['alt' => $product->manufacturer]) ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12 view_list">
        <div class="pd-live-actions-wrapper">
            <div class="live-actions">LIVE AUCTION IN PROGRESS</div>
            <div>
                <a class="live-actions-a" href="<?= Url::to(['cart/add', 'id' => $product['id']]) ?>"
                   data-id="<?= $product['id'] ?>" class="add_cart_prod">Join Auction NOW!</a>
            </div>
        </div>

        <div class="sale-info-wrapper">
            <div class="sale-info-condensed">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h3 class="sale-info-h3">Location: </h3><h4><?= $product['location']; ?></h4>
                        <h5 class="sale-info-h3">on: <?= $product['date_posted']; ?></h5>
                    </div>
                    <div class="col-6 col-md-6">
                        <h3 class="sale-info-h3">Date sale: </h3><h4><?= $product['date_sale']; ?></h4>
                        <p class="timer">Time left:
                            <?php
                            $date1 = date('m/d/Y h:i:s a', time());
                            $date2 = $product['date_sale'];
                            $diff = abs(strtotime($date2) - strtotime($date1));
                            $years = floor($diff / (365 * 60 * 60 * 24));
                            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $time = gmmktime(0, 0, 0, $month, 1, $year); // первое число указанного года-месяца
                            $days = gmdate("t", $time); // кол-во дней в месяце указанной даты
                            $days_for_hour = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                            $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days_for_hour * 60 * 60 * 24) / (60 * 60));
                            $minuts = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days_for_hour * 60 * 60 * 24 - $hours * 60 * 60) / 60);
                            $seconds = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days_for_hour * 60 * 60 * 24 - $hours * 60 * 60 - $minuts * 60));
                            printf("%d days, %d hours, %d minuts\n", $days + $days_for_hour, $hours, $minuts);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <p class="text-center">Views this product: <?= $product['views'] ?></p>
        </div>
        <div class="pd-vehicle-info-wrapper">
            <h2>Details</h2>
            <div class="tabs tab-vehicle waypoint-trigger" id="vehicletabDiv">
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Seller</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $product['seller']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Manufacturer</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $product['manufacturer']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Model</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $product['model']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Product Condition</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $product['product_condition']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Description</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $product['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>