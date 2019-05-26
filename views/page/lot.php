<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'STIGL - ' . $lot['manufacturer'] . ' ' . $lot['model']; ?>
<div class="row">
    <div class="col-md-6 col-sm-12 col-12 catalog">
        <?php
        $mainImg = $lot->getImage();
        $gallery = $lot->getImages();
        ?>
        <div class="text-center" style="margin-top: 50px;">
            <h3><?= $lot['manufacturer'] . ' ' . $lot['model']; ?></h3>
            <p>Lot # <span class="high-price"><?= $lot['id']; ?></span></p>
            <div class="slider_auction">
                <?= Html::img($mainImg->getUrl(), ['class' => 'img-fluid']) ?>
                <!--Lets show the second image by default on page load-->
                <!--                        --><?php //$count = count($gallery); $i = 1; foreach($gallery as $img): $i++?>
                <?php $count = count($gallery);
                $i = 1;
                foreach ($gallery as $img): $i++ ?>
                    <input type="radio" name="slide_switch" id="id<?= $i; ?>"/>
                    <label for="id<?= $i; ?>">
                        <?= Html::img($img->getUrl('100x75'), ['alt' => $lot->manufacturer]) ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12 view_list">
        <?php if ($lot['lot_condition'] == 2): ?>
            <div class="pd-wrapper">
                <div class="col-12 actions-fixed-wrapper" style="">
                    <img style="max-width:100%; max-height: 100%; width: auto; height: auto;" src="/images/sold.jpg">
                </div>
            </div>
        <?php elseif ($realtime): ?>
            <div class="pd-live-actions-wrapper">
                <div class="live-actions">LIVE AUCTION IN PROGRESS</div>
                <div><a class="live-actions-a"
                        href="<?= Url::toRoute(['page/frame-auction-real-time', 'id' => $date['id']]); ?>">Join Auction
                        NOW!</a></div>
            </div>
        <?php elseif (Yii::$app->user->isGuest): ?>
            <div class="pd-wrapper">
                <div class="col-12 flex actions-fixed-wrapper" style="">
                    <div class="singIn_title">Sign In to Bid</div>
                    <div class="signIn_btn"><a href="<?= Url::toRoute('page/login'); ?>">Sign In</a></div>
                    <div class="reg_btn"><a href="<?= Url::toRoute('page/signup'); ?>">Register</a></div>
                </div>
            </div>
        <?php else: ?>
            <?php $user_id = Yii::$app->user->id; ?>
            <div class="pd-fight-margin">
                <?php if (isset($lot['current_bid']) && isset($lot['bid_increment'])): ?>
                    <div class="pd-actions-wrapper" style="">
                        <div class="col-12 flex actions-fixed-wrapper" style="">
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p style="font-size: 22px;">Max Bid to Buy:</p>
                            </div>
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p>Current Bid: <span class="high-price">$ <?= $lot['current_bid']; ?></span></p>
                                <form method="POST"
                                      action="<?= Url::toRoute(['bid/add', 'id' => $lot['id']/*, 'bid' => $key*/]); ?>"
                                      accept-charset="UTF-8" class="bid-form" id="bid-form">
                                    <!--                    <form method="POST" action="/bid/add" accept-charset="UTF-8" class="bid-form" id="bid-form">-->
                                    <input id="bid" class="bid-input" type="text" name="bid"
                                           value="<?= $lot['current_bid'] + $lot['bid_increment']; ?>">
                                    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                                </form>
                            </div>
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p>Bid Increment: <span class="high-price">$ <?= $lot['bid_increment']; ?></span></p>
                                <div>
                                    <input type="submit" value="Bid" class="btn btn-block btn-prebid " form="bid-form">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;
                if (isset($lot['current_bid_rent']) && isset($lot['bid_increment_rent'])):?>
                    <div class="pd-actions-wrapper">
                        <div class="col-12 flex actions-fixed-wrapper" style="">
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p style="font-size: 22px;">Max Bid to Rent:</p>
                            </div>
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p>Current Bid: <span class="high-price">$ <?= $lot['current_bid_rent']; ?></span></p>
                                <form method="POST"
                                      action="<?= Url::toRoute(['bid/add-rent', 'id' => $lot['id']/*, 'bid' => $key*/]); ?>"
                                      accept-charset="UTF-8" class="bid-form-rent" id="bid-form-rent">
                                    <!--                    <form method="POST" action="/bid/add" accept-charset="UTF-8" class="bid-form" id="bid-form">-->
                                    <input id="bid_rent" class="bid-input" type="text" name="bid_rent"
                                           value="<?= $lot['current_bid_rent'] + $lot['bid_increment_rent']; ?>">
                                    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                                </form>
                            </div>
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p>Bid Increment: <span class="high-price">$ <?= $lot['bid_increment_rent']; ?></span></p>
                                <div>
                                    <input type="submit" value="Bid" class="btn btn-block btn-prebid " form="bid-form-rent">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="sale-info-wrapper">
            <div class="sale-info-condensed">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h3 class="sale-info-h3">Location: </h3>
                        <h4 style="font-size: 18px;"><?= $lot['location']; ?></h4>
                        <h5 class="sale-info-h3" style="font-size: 14px;">on: <?= $lot['date_posted']; ?></h5>
                    </div>
                    <div class="col-6 col-md-6">
                        <h3 class="sale-info-h3">Date sale: </h3>
                        <h4 style="font-size: 18px;"><?= $date['auc_date'] ?></h4>
                        <p class="timer">Time left:
                            <?php
                            $date1 = date('m/d/Y h:i:s a', time());
                            $diff = abs(strtotime($date['auc_date']) - strtotime($date1));
                            $years = floor($diff / (365 * 60 * 60 * 24));
                            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            if ($months != 0) {
                                $time = gmmktime(0, 0, 0, $month, 1, $year); // первое число указанного года-месяца
                                $days = gmdate("t", $time); // кол-во дней в месяце указанной даты
                                $days_for_hour = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                                $days += $days_for_hour - 1;
                            } else {
                                $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
                            }

                            $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days_for_hour * 60 * 60 * 24) / (60 * 60));
                            $minuts = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days_for_hour * 60 * 60 * 24 - $hours * 60 * 60) / 60);
                            $seconds = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days_for_hour * 60 * 60 * 24 - $hours * 60 * 60 - $minuts * 60));
                            printf("%d days, %d hours, %d minuts\n", $days, $hours, $minuts);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <p class="text-center">Views this product: <?= $lot['views'] ?></p>
        </div>
        <div class="pd-vehicle-info-wrapper">
            <h2>Details</h2>
            <div class="tabs tab-vehicle waypoint-trigger" id="vehicletabDiv">
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Lot Condition</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <?php foreach ($lot_cond as $item_lot): if ($item_lot['id'] == $lot['lot_condition']): ?>
                            <p><?= $item_lot['name']; ?></p>
                        <?php endif ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Sale Date</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $lot['date_sale']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Seller</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $lot['seller']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Manufacturer</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $lot['manufacturer']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Model</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $lot['model']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Product Condition</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <?php foreach ($prod_cond as $item_prod): if ($item_prod['id'] == $lot['product_condition']): ?>
                            <p><?= $item_prod['name']; ?></p>
                        <?php endif ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-label">
                        <p>Description</p>
                    </div>
                    <div class="col-md-7 col-value">
                        <p><?= $lot['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>