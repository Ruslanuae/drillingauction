<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\User;
use app\modules\admin\models\Products;
use app\models\Countries;
use app\models\Categories;
use app\models\Image;
use yii\db\Query;
use app\models\UserDeposit;

$this->title = 'STIGL - Auction';
$this->registerCssFile('/css/flags.css');
$this->registerCssFile('/css/demo.css');
$this->registerCssFile('/css/tooltip-classic.css');
?>
<?php
//$mainImg = $lot->getImage();
//$gallery = $lot->getImages();
//debug($mainImg);
?>

<!--<center><h3><span class="alert alert-danger alert-dismissible">Данный раздел в разработке и находится в тестовом режиме!</span></h3></center>-->
<!--<center><h3><span class="alert alert-danger alert-dismissible">Все товары и торги вымышлены. За время торгов ни один из товаров не пострадал.</span></h3></center>-->
<?php if (count($lots) > 0): ?>
    <div class="col-md-6 col-sm-12 col-12 real-catalog">
        <div class="row content">
            <div class="auction_images">
                <div class="img-container" id="img-container">
                    <div class="lot-img image-active" id="lot-img">
                        <?php
                        $id_n = $lots[0]['id'];
                        $query_n = Products::findOne($id_n);
                        $mainImg = $query_n->getImage();
                        $gallery = $query_n->getImages(); ?>
                        <img src="<?= $mainImg->getUrl() ?>" alt="" id="img-<?= $id_n ?>-main" class="active">

                        <?php $count = count($gallery);
                        $i = 0;
                        foreach ($gallery as $img): $i++ ?>
                            <img src="<?= $img->getUrl() ?>" alt="" id="img-<?= $id_n ?>-<?= $i; ?>">
                        <?php endforeach; ?>

                        <?php foreach ($lots as $lot):
                            if ($lot == $lots[0]) continue;
                            $id_n = $lot['id'];
                            $query_n = Products::findOne($id_n);
                            $mainImg = $query_n->getImage();
                            $gallery = $query_n->getImages(); ?>

                            <img src="<?= $mainImg->getUrl() ?>" alt="" id="img-<?= $id_n ?>-main">

                            <?php $count = count($gallery);
                            $i = 1;
                            foreach ($gallery as $img): $i++ ?>
                                <img src="<?= $img->getUrl() ?>" alt="" id="img-<?= $id_n ?>-<?= $i; ?>">
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </div>

                </div>
                <div class="img_slide">
                    <span class="left"><i class="fa fa-chevron-left"></i></span>
                    <div class="slide-img-container" id="slide-img-container">
                        <ul class="img-pagination" style="left:0" id="slide-ul">
                            <?php
                            $id_n = $lots[0]['id'];
                            $query_n = Products::findOne($id_n);
                            $gallery = $query_n->getImages(); ?>
                            <?php $count = count($gallery);
                            $i = 0;
                            foreach ($gallery as $img): $i++ ?>
                                <li class="slide-img-<?= $id_n ?> ul_active" id="<?= $id_n ?>-<?= $i; ?>"><a><img
                                                src="<?= $img->getUrl() ?>" alt=""></a></li>
                            <?php endforeach; ?>
                            <?php foreach ($lots as $lot):
                                if ($lot == $lots[0]) continue;
                                $id_n = $lot['id'];
                                $query_n = Products::findOne($id_n);
                                $mainImg = $query_n->getImage();
                                $gallery = $query_n->getImages(); ?>
                                <?php $count = count($gallery);
                                $i = 1;
                                foreach ($gallery as $img): $i++ ?>
                                    <li class="slide-img-<?= $id_n ?>" id="<?= $id_n ?>-<?= $i; ?>"><a><img
                                                    src="<?= $img->getUrl() ?>" alt=""></a></li>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <span class="right"><i class="fa fa-chevron-right"></i></span>
                </div>
            </div>
        </div>
        <div class="auction_list" id="auction_list">
            <div class="auction_list_item item_active" id="<?= $lots[0]['id'] ?>">
                <div class="col-md-4">
                    <div class="row">
                        <div class="auction_list_item_img"><img
                                    src="<?= Products::findOne($lots[0]['id'])->getImage()->getUrl() ?>" alt=""></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <p class="auction_list_right"><span>$<?= $lots[0]['current_bid'] ?></span></p>
                        <p><span><?= $lots[0]['manufacturer'] ?> <?= $lots[0]['model'] ?></span></p>
                        <p class="auction_list_right">Now</p>
                        <p><span>Lot:</span> <?= $lots[0]['id'] ?></p>
                        <p><span>Item:</span> 122</p>
                    </div>
                </div>
            </div>
            <?php foreach ($lots as $lot): ?>
                <?php if ($lot == $lots[0]) continue; ?>
                <div class="auction_list_item" id="<?= $lot['id'] ?>">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="auction_list_item_img"><img
                                        src="<?= Products::findOne($lot['id'])->getImage()->getUrl() ?>"
                                        alt="<?= Products::findOne($lot['id'])->getImage()->getUrl() ?>"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <p class="auction_list_right"><span>$<?= $lot['current_bid'] ?></span></p>
                            <p><span><?= $lot['manufacturer'] ?> <?= $lot['model'] ?></span></p>
                            <p class="auction_list_right">Now</p>
                            <p><span>Lot:</span> <?= $lot['id'] ?></p>
                            <p><span>Item:</span> 122</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-12 view_list">
        <div class="pd-fight-margin" id="pd-fight-margin">
            <div class="pd-progress" id="pd-progress">
                <div class="col-12 actions-fixed-wrapper" style="">
                    <div class="live-actions"><span>Auction in Progress</span></div>
                </div>
            </div>
            <div class="fight_wrapper fight_active" id="fight_wrapper">
                <h3><?= $lots[0]['manufacturer'] . ' ' . $lots[0]['model']; ?></h3>
                <input type="hidden" name="lot_id" id="lot_id" value="<?= $lots[0]['id'] ?>"/>
                <?php if (!isset($coming_soon)):
                if (!Yii::$app->user->isGuest):
                $user_id = Yii::$app->user->id; ?>
                <input type="hidden" id="user_id" value="<?= $user_id ?>"/>
                <?php if (isset($lots[0]['current_bid']) && isset($lots[0]['bid_increment'])): ?>
                    <div class="pd-actions-wrapper" style="">
                        <div class="flex actions-fixed-wrapper" style="">
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p style="font-size: 22px;">Max Bid to Buy:</p>
                            </div>
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p><span class="toolview tooltip-effect-1"><span
                                                class="toolview-item">Current Bid: </span><span
                                                class="toolview-content clearfix"><span class="toolview-text">The current bid at the moment, made by the participants of the auction.</span></span></span><span
                                            id="online_current_bid"
                                            class="high-price"> $<?= $lots[0]['current_bid']; ?></span></p>
                                <!--                        <p>Current Bid: <span id="online_current_bid"  class="high-price">$-->
                                <? //= $lots[0]['current_bid'];?><!--</span></p>-->
                                <input id="bid" class="bid-input" type="text" name="bid"
                                       value="<?= $lots[0]['current_bid'] + $lots[0]['bid_increment']; ?>">
                                <input type="hidden" id="current_bid" value="<?= $lots[0]['current_bid']; ?>"/>
                                <input type="hidden" id="bid_increment" value="<?= $lots[0]['bid_increment']; ?>"/>
                                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                            </div>
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p><span class="toolview tooltip-effect-1"><span
                                                class="toolview-item">Bid Increment: </span><span
                                                class="toolview-content clearfix"><span class="toolview-text">The minimum allowed step of the auction. The minimum surplus to the current rate is bid.</span></span></span><span
                                            class="high-price"> $<?= $lots[0]['bid_increment']; ?></span></p>
                                <!--                        <p>Bid Increment: <span class="high-price">$ -->
                                <? //= $lots[0]['bid_increment'];?><!--</span></p>-->
                                <div>
                                    <input type="submit" value="Bid" id="btnSend" class="btn btn-block btn-prebid ">
                                </div>
                            </div>
                        </div>
                    </div>
                <? endif;
                if (isset($lots[0]['current_bid_rent']) && isset($lots[0]['bid_increment_rent'])):?>
                    <div class="pd-actions-wrapper">
                        <div class="flex actions-fixed-wrapper" style="">
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p style="font-size: 22px;">Max Bid to Rent:</p>
                            </div>
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p><span class="toolview tooltip-effect-1"><span
                                                class="toolview-item">Current Bid: </span><span
                                                class="toolview-content clearfix"><span class="toolview-text">The current bid at the moment, made by the participants of the auction.</span></span></span><span
                                            id="online_current_bid_rent"
                                            class="high-price"> $<?= $lots[0]['current_bid_rent']; ?></span></p>
                                <!--                        <p>Current Bid: <span id="online_current_bid_rent" class="high-price">$-->
                                <? //= $lots[0]['current_bid_rent'];
                                ?><!--</span></p>-->
                                <input id="bid_rent" class="bid-input" type="text" name="bid_rent"
                                       value="<?= $lots[0]['current_bid_rent'] + $lots[0]['bid_increment_rent']; ?>">
                                <input type="hidden" id="current_bid_rent"
                                       value="<?= $lots[0]['current_bid_rent']; ?>"/>
                                <input type="hidden" id="bid_increment_rent"
                                       value="<?= $lots[0]['bid_increment_rent']; ?>"/>
                                <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                            </div>
                            <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                                <p><span class="toolview tooltip-effect-1"><span
                                                class="toolview-item">Bid Increment: </span><span
                                                class="toolview-content clearfix"><span class="toolview-text">The minimum allowed step of the auction. The minimum surplus to the current rate is bid.</span></span></span><span
                                            class="high-price"> $<?= $lots[0]['bid_increment_rent']; ?></span></p>
                                <!--                        <p>Bid Increment: <span class="high-price">$ -->
                                <? //= $lots[0]['bid_increment_rent'];
                                ?><!--</span></p>-->
                                <div>
                                    <input type="submit" value="Bid" id="btnSend_rent"
                                           class="btn btn-block btn-prebid ">
                                </div>
                            </div>
                        </div>
                    </div>
                <? endif; ?>
            </div>
        </div>
        <? else: ?>
            <div class="singIn_title">Sign In to Bid to Buy & Rent</div>
            <div class="pd-actions-wrapper" style="">
                <div class="flex actions-fixed-wrapper" style="">
                    <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                        <div class="signIn_btn"><a href="<?= Url::toRoute('page/login'); ?>" target="_blank">Sign In</a>
                        </div>
                    </div>
                    <div class="pd-btn-wrapper flex-btn btn-prebid-wrapper">
                        <div class="reg_btn"><a href="<?= Url::toRoute('page/signup'); ?>" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        <? endif;
        ?>
        <? endif; ?>
        <div class="auction_bid_timer">
            <?php if (isset($coming_soon)): ?>
                <div id="CountDownTimerH" data-date="<?= $auctionData['auc_date'] ?>"
                     style="width: 150px; height: 150px;"></div>
            <?php else: ?>
                <img src="/images/sold_a.png" alt="" class="timer-img" id="timer-sold" style="display: none;"/>
                <div id="CountDownTimer" data-timer="20" style="width: 150px; height: 150px;"></div>
            <?php endif; ?>
        </div>
        <?php if (isset($coming_soon)): ?>
            <div class="user_click">
                <img class="img-coming" src="/images/coming_soon.png"/>
            </div>
        <?php else: ?>
            <div class="user_click">
                <span id="bid_type"> </span>
                <span id="user_country"> </span>
                <span id="user_name"> </span>
                <span id="user_bid"> </span>
            </div>
        <?php endif; ?>
        <div class="pd-vehicle-info-wrapper">
            <h2>Details</h2>
            <div class="tabs tab-vehicle waypoint-trigger" id="vehicletabDiv">
                <div class="row" id="auction_example">
                    <div id="det-<?= $lots[0]['id'] ?>" class="auction_lot_d detail_active">
                        <div class="auction_lot_detail">
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Lot Condition</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <?php foreach ($lot_cond as $item_lot): if ($item_lot['id'] == $lots[0]['lot_condition']): ?>
                                        <p><?= $item_lot['name']; ?></p>
                                    <?php endif ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Category</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <p><?= Categories::findOne($lots[0]['category'])['name'] ?></p>
                                </div>
                            </div>
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Location</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <p><?= $lots[0]['location']; ?></p>
                                </div>
                            </div>
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Sale Date</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <p><?= $lots[0]['date_sale']; ?></p>
                                </div>
                            </div>
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Seller</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <p><?= $lots[0]['seller']; ?></p>
                                </div>
                            </div>
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Manufacturer</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <p><?= $lots[0]['manufacturer']; ?></p>
                                </div>
                            </div>
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Model</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <p><?= $lots[0]['model']; ?></p>
                                </div>
                            </div>
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Product Condition</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <?php foreach ($prod_cond as $item_prod): if ($item_prod['id'] == $lots[0]['product_condition']): ?>
                                        <p><?= $item_prod['name']; ?></p>
                                    <?php endif ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="row flex">
                                <div class="col-md-5 col-label">
                                    <p>Description</p>
                                </div>
                                <div class="col-md-7 col-value">
                                    <p><?= $lots[0]['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($lots as $lot): ?>
                        <?php if ($lot == $lots[0]) continue; ?>
                        <div id="det-<?= $lot['id'] ?>" class="auction_lot_d">

                            <div class="auction_lot_detail">
                                <div class="row flex">
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
                                <div class="row flex">
                                    <div class="col-md-5 col-label">
                                        <p>Category</p>
                                    </div>
                                    <div class="col-md-7 col-value">
                                        <p><?= Categories::findOne($lot['category'])['name'] ?></p>
                                    </div>
                                </div>
                                <div class="row flex">
                                    <div class="col-md-5 col-label">
                                        <p>Location</p>
                                    </div>
                                    <div class="col-md-7 col-value">
                                        <p><?= $lot['location']; ?></p>
                                    </div>
                                </div>
                                <div class="row flex">
                                    <div class="col-md-5 col-label">
                                        <p>Sale Date</p>
                                    </div>
                                    <div class="col-md-7 col-value">
                                        <p><?= $lot['date_sale']; ?></p>
                                    </div>
                                </div>
                                <div class="row flex">
                                    <div class="col-md-5 col-label">
                                        <p>Seller</p>
                                    </div>
                                    <div class="col-md-7 col-value">
                                        <p><?= $lot['seller']; ?></p>
                                    </div>
                                </div>
                                <div class="row flex">
                                    <div class="col-md-5 col-label">
                                        <p>Manufacturer</p>
                                    </div>
                                    <div class="col-md-7 col-value">
                                        <p><?= $lot['manufacturer']; ?></p>
                                    </div>
                                </div>
                                <div class="row flex">
                                    <div class="col-md-5 col-label">
                                        <p>Model</p>
                                    </div>
                                    <div class="col-md-7 col-value">
                                        <p><?= $lot['model']; ?></p>
                                    </div>
                                </div>
                                <div class="row flex">
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
                                <div class="row flex">
                                    <div class="col-md-5 col-label">
                                        <p>Description</p>
                                    </div>
                                    <div class="col-md-7 col-value">
                                        <p><?= $lot['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/time_circles.js"></script>
    <script type="text/javascript" src="/js/time_circles2.js"></script>
    <script>
        // var timer = $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false }, Minutes: { show: false }  }});
        var tttt = $("#CountDownTimer");
        var timerH = $("#CountDownTimerH").TimeCircles2({
            time: {
                Days: {show: false},
                Hours: {show: false},
                Seconds: {show: false}
            }
        });

        function getMyTimerSeconds(myTime) {
            //console.log(timerH);
            if (myTime <= 0) {
                timerH.destroy();
                window.location.reload();
            }
        }
    </script>

    <script type="text/javascript" src="/js/buttons_bid.js"></script>
    <script>
        var socket = new WebSocket('ws://185.11.73.134:8088');
        var maxInt32 = 2147483647;
        var timeLeft = null;
        var restartTime = null;
        var tmp_num = false;
        //var tttt = null;
        //document.write("Server time is: " + date);
        function check() {
            if (socket.readyState === socket.OPEN) {
                socket.send('timeLeft');
                var timerId = setInterval(function () {
                    socket.send('timer');
                }, 100);
            } else
                setTimeout(check, 100);
        }

        check();
        socket.onopen = function (e) {

        };
        socket.onmessage = function (e) {
            $('#response').text('');
            var response = JSON.parse(e.data);
            if (response.timer) {
//            var messageBidType = document.getElementById('bid_type');
//            messageBidType.innerHTML = response.timer;
                //console.log(response.timer);
                if (response.timer <= 0) {
                    if (!tmp_num) {
                        console.log(tmp_num);
                        tmp_num = true;
                        restartTime.stop();
                        var timerImgSold = document.getElementById('timer-sold');
                        timerImgSold.style.display = 'block';
                        var nLot = document.getElementById('lot_id').value;

//                $.ajax({ url: '/web/functions/update_lot_condition.php', type: 'post', data: {'id': nLot'},
                        $.ajax({
                            url: '/page/update-lot-condition', type: 'post', data: {'id': nLot},
                            success: function (data) {
                                function funcReload() {
                                    window.location.reload();
                                }

                                setTimeout(funcReload, 1000);
                            },
                            error: function (data) {
                                console.log('Error, ' + data + ' failed');
                            }
                        });
                    }
                }
//            else if(response.timer <= 0 && timerH.end().length > 0){
//                timerH.destroy();
//                window.location.reload();
//            }
            } else if (response.timeLeft) {
                timeLeft = response.timeLeft;
                restartTime = tttt.TimeCircles({ref_date: timeLeft});
            } else if (response.restart) {
                restartTime.restart();
            } else {
                document.getElementById('user_country').innerHTML = '<i class="flag-' + response.country + '"></i>';
                document.getElementById('user_name').innerHTML = response.user;
                document.getElementById('user_bid').innerHTML = '$' + response.bid;
                if (response.type == 'sale') {
                    document.getElementById('bid_type').innerHTML = 'Bid to Buy!';
                    document.getElementById('online_current_bid').innerHTML = '$' + response.bid;
                    document.getElementById('bid').value = Number(response.bid) + Number($('#bid_increment').val());
                } else {
                    document.getElementById('bid_type').innerHTML = 'Bid to Rent!';
                    document.getElementById('online_current_bid_rent').innerHTML = '$' + response.bid;
                    document.getElementById('bid_rent').value = Number(response.bid) + Number($('#bid_increment_rent').val());
                }
            }
        };
        $('#btnSend').click(function () {
            tmp_num = false;
            socket.send('timer');
            if ($('#bid').val() && Number($('#bid').val()) >= Number($('#current_bid').val()) + Number($('#bid_increment').val()) && $('#bid').val() <= maxInt32) {
                var userID = $('#user_id').val();
                var lotID = $('#lot_id').val();
                var bidTmp = Number($('#bid').val());
                socket.send(JSON.stringify({'bid': bidTmp, 'lot_id': lotID, 'user_id': userID, 'type': 'sale'}));
            } else if ($('#bid').val() > maxInt32) {
                alert("Ooops! The bid is too high. You scoff at the auction, or you're crazy!");
            } else if ($('#bid').val()) {
                alert('Error! Wrong bid! The bid must be greater than the current bid!');
            } else {
                alert('Error! Enter value!');
            }
        });
        $('#btnSend_rent').click(function () {
            tmp_num = false;
            socket.send('timer');
            if ($('#bid_rent').val() && Number($('#bid_rent').val()) >= Number($('#current_bid_rent').val()) + Number($('#bid_increment_rent').val()) && $('#bid_rent').val() <= maxInt32) {
                var userID = $('#user_id').val();
                var lotID = $('#lot_id').val();
                var bidTmp = Number($('#bid_rent').val());
                socket.send(JSON.stringify({'bid': bidTmp, 'lot_id': lotID, 'user_id': userID, 'type': 'rent'}));
            } else if ($('#bid_rent').val() > maxInt32) {
                alert("Ooops! The bid is too high. You scoff at the auction, or you're crazy!");
            } else if ($('#bid_rent').val()) {
                alert('Error! Wrong bid! The bid must be greater than the current bid!');
            } else {
                alert('Error! Enter value!');
            }
        });

    </script>
<?php else: ?>
    <div class="finish_auc">
        <center><h1>All the lots at the current auction are sold</h1></center>
    </div>
    <div class="cbalink">
    </div>
<?php endif; ?>

