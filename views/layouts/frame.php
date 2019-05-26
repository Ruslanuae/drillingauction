<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\modules\admin\models\Products;
use app\models\User;
use app\models\CookieManager;
use app\models\Online;
use app\assets\DefaultAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Search;
use app\models\Contacts;
use yii\data\Pagination;

$this->registerCssFile('/css/table.css');
$model = new Search();
DefaultAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta property="og:site_name" content="STIGL F.Z.E.">
    <meta property="og:title" content="STIGL F.Z.E."/>
    <meta property="og:description"
          content="STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and drilling industries as a supplier of oilfield drilling and industrial products."/>
    <meta property="og:image" itemprop="image" content="http://temporaryserver.zzz.com.ua/web/images/about-main.jpg">
    <meta property="og:type" content="website"/>
    <meta property="og:updated_time" content="1440432930"/>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="stylesheet" href="../../web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../web/css/main.css">
    <link rel="stylesheet" href="../../web/css/flags.css">

    <link rel="stylesheet" href="../../web/css/slick/slick.css"/>
    <link rel="stylesheet" href="../../web/css/slick/slick-theme.css"/>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="/js/jquery.vide.min.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <!--    <audio id="button_click_audio">-->
    <!--        <source src="/sounds/button_click.mp3" type="audio/mp3" >-->
    <!--    </audio>-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header">
    <div class="logo"><a href="/"><img src="/images/logo.png" alt="" class="logo-img"></a></div>
    <div class="menu-wrapper">
        <ul class="top-menu">
            <?php if (!Yii::$app->user->isGuest): ?>
                <li><a href="<?= Url::toRoute(['page/cabinet', 'id' => Yii::$app->user->id]) ?>">My Account</a></li>
            <?php else: ?>
                <!--                    <a href="--><? //=Url::toRoute('page/signup');?><!--"><i class="glyphicon glyphicon-registration-mark"></i>Sign Up</a>-->
                <li><a href="<?= Url::toRoute('page/login'); ?>"></i>LogIn</a></li>
            <?php endif; ?>
            <!--<li><a href="#" onclick="return getCart()">Requests List</a></li>-->
            <li><span class="noo-Server-Time">Server Time: <?//= date('m/d/Y H:i', time()) ?><span id="currentTime"></span></span></li>
        </ul>
        <br>
        <ul class="top-menu-online">
            <?php if (!Yii::$app->user->isGuest): ?>
                <?php
                $cookieKey = 'online-cache';
                $online = Online::findOne(['user_id' => Yii::$app->user->id]);
                if ($online) {
                    $doUpdate = false;
                    if (CookieManager::stored($cookieKey)) {
                        $t = (array)@json_decode(CookieManager::read($cookieKey), true);
                        if ($t) {
                            if ($t['lastvisit'] < (time() - 300)) {
                                $doUpdate = true;
                            }
                        } else {
                            $doUpdate = true;
                        }
                    } else {
                        $doUpdate = true;
                    }
                    if ($doUpdate) {
                        $online->lastvisit = time();
                        $online->save();
                        CookieManager::store($cookieKey, json_encode(array(
                            'user_id' => $online->user_id,
                            'lastvisit' => $online->lastvisit
                        )));
                    }
                } else {
                    $online = new Online();
                    $online->user_id = Yii::$app->user->id;
                    $online->lastvisit = time();
                    $online->save();
                    CookieManager::store($cookieKey, json_encode(array(
                        'user_id' => $online->user_id,
                        'lastvisit' => $online->lastvisit
                    )));
                }
                ?>
            <?php endif; ?>
            <li>
                <span>Online: <?= count(Online::find()->where(['>', 'lastvisit', (time() - 600)])->asArray()->all()) ?></span>
            </li>
            <li><span>Users registered: <?= count(User::find()->where(['status' => '10'])->asArray()->all()) ?></span>
            </li>
        </ul>
        <ul class="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/page/catalog-drilling">Oil Drilling Services</a></li>
            <li><a href="/page/all-catalog-lease">Lease</a></li>
            <li><a href="/page/all-catalog">Product</a></li>
            <li><a href="/page/tender">Tender</a></li>
            <li><a href="/page/auction-catalog">Bidding</a></li>
            <li><a href="/page/auction-lists">Auctions calendar</a></li>
            <li><a href="/page/listnews">News</a></li>
            <li><a href="/page/contacts">Contacts</a></li>
        </ul>
        <form id="search-lot" method="get" class="search_top" action="<?= Url::toRoute('page/search'); ?>">
            <input type="text" id="seacrh" class="search_lot" name="search" placeholder="Search by product"
                   aria-invalid="false" value="<?= $q ?>">
            <button type="submit" class="search_btn" id="seacrh"><i class="glyphicon glyphicon-search"></i></button>
        </form>
    </div>
</div>

<?= $content; ?>
<div class="container-fluid footer">
    <div class="container">
        <div class="row menu_footer_and_contact">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="footer_menu">
                    <h3>Services and sales</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/page/catalog-drilling">Oil Drilling Services</a></li>
                        <li><a href="/page/all-catalog-lease">Lease</a></li>
                        <li><a href="/page/all-catalog">Product</a></li>
                        <li><a href="/page/tender">Tender</a></li>
                        <li><a href="/page/auction-catalog">Bidding</a></li>
                        <li><a href="/page/auction-lists">Auctions calendar</a></li>
                        <li><a href="/page/listnews">News</a></li>
                        <li><a href="/page/contacts">Contacts</a></li>
                    </ul>
                </div>
                <div class="footer_menu">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="<?= Url::toRoute('page/delivery'); ?>">Delivery</a></li>
                        <li><a href="<?= Url::toRoute('page/payment'); ?>">Payment</a></li>
                        <li><a href="<?= Url::toRoute('page/about-company'); ?>">About Company</a></li>
                        <li><a href="<?= Url::toRoute('page/feedback'); ?>">Feedback</a></li>
                    </ul>
                </div>
                <div class="footer_menu">
                    <h3>Account</h3>
                    <ul>
                        <?php if (!Yii::$app->user->isGuest): ?>

                            <li><a href="<?= Url::toRoute(['page/cabinet', 'id' => Yii::$app->user->id]) ?>">My
                                    Account</a></li>
                        <?php else: ?>
                            <li><a href="<?= Url::toRoute('page/login'); ?>">Login</a></li>
                            <li><a href="<?= Url::toRoute('page/signup'); ?>">Sign Up</a></li>
                        <?php endif; ?>
                        <!--<li><a href="#">Мои заказы</a></li>
                        <li><a href="#">Список желаний</a></li>-->
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contacts">
                <h3>Contacts</h3>
                <?php $contacts = Contacts::find()->asArray()->All();
                foreach ($contacts as $contact):?>
                    <p>
                        <i class="glyphicon glyphicon-map-marker"></i>Address: <?php echo $contact['index_city'], ', ', $contact['city'], ', ', $contact['street'], ', ', $contact['number_home']; ?>
                    </p>
                    <p><i class="glyphicon glyphicon-phone-alt"></i>Support: <?php echo $contact['number_f']; ?></p>
                    <p><i class="glyphicon glyphicon-envelope"></i>E-mail: <?php echo $contact['mail']; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 copy">
                <center><p>STIGL F.Z.E. © <?php $a = getdate();
                        echo $a['year']; ?></p></center>
            </div>
            <div class="cbalink">

            </div>
        </div>
    </div>
</div>
<?php
\yii\bootstrap\Modal::begin
([
    'header' => '<h2>List of applications for the manager</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '
        <button type="button" class="btn btn-default" data-dismiss="modal">Continue browsing</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success-cart">Make a request</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Clear the list</button>
']);
\yii\bootstrap\Modal::end();
?>

<?php $this->endBody() ?>
<!--<script type="text/javascript" src="/js/echo_server.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->
</body>
</html>
<?php $this->endPage() ?>
