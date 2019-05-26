<?php

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;
use app\models\Search;
use app\models\User;
use app\models\Contacts;
use app\models\CookieManager;
use app\models\Online;
use app\models\Views;

$model = new Search();
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:site_name" content="STIGL F.Z.E.">
    <meta property="og:title" content="STIGL F.Z.E."/>
    <meta property="og:description"
          content="STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and drilling industries as a supplier of oilfield drilling and industrial products."/>
    <meta property="og:image" itemprop="image" content="http://temporaryserver.zzz.com.ua/web/images/about-main.jpg">
    <meta property="og:type" content="website"/>
    <meta property="og:updated_time" content="1440432930"/>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
          content="STIGL FZE,STIGL,FZE,Free Zone, Ajman Free Zone, Ajman,Alexandr Shvets, Roman Kolesnikov, Developer, Adam Salathanov">
    <meta name="description"
          content="STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and drilling industries as a supplier of oilfield drilling and industrial products.">

    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<?php $this->beginBody() ?>
<header<?=(Yii::$app->request->url == '/') ? ' style="margin-bottom: -17.5%;position: relative;z-index: 1000;"' : ''?>>
    <nav class="navbar navbar-expand-md navbar-dark bg-blue">
        <a class="navbar-brand" href="/">
            <img class="img-fluid" src="/images/logo-new.png"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-column" id="menu">
            <div class="row w-100">
                <div class="col-md-8 break-1213">
                    <ul class="navbar-nav justify-content-start">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownAbout">
                                <a class="dropdown-item" href="/page/vacancy">Vacancy</a>
                                <a class="dropdown-item" href="/page/contacts">Contacts</a>
                                <a class="dropdown-item" href="/page/branches">Branches</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownService" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownService">
                                <a class="dropdown-item" href="/page/catalog-drilling/">Oil well Drilling services</a>
                                <a class="dropdown-item" href="/page/catalog-drilling/">Equipment repair service</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownSale" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sale @ Rent</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownSale">
                                <a class="dropdown-item" href="/page/sale-rent/">Equipment for sale</a>
                                <a class="dropdown-item" href="/page/sale-rent/">Equipment for rent</a>
                                <a class="dropdown-item" href="/page/sale-rent/">Business for sale</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownAuction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Auctions</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownAuction">
                                <a class="dropdown-item" href="/page/auction-lists/">Auctions Calendar</a>
                                <a class="dropdown-item" href="/page/auction-catalog/">Join Auction</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tender/">Tender</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/page/listnews/">News</a>
                        </li>
                        <?if (!Yii::$app->user->isGuest) {?>
                            <li class="ml-auto dropdown break-1213-none">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownProfile">
                                    <a class="dropdown-item" href="/page/cabinet/">My Page</a>
                                    <?if (in_array(Yii::$app->user->identity->email, Yii::$app->params['admins'])) {?>
                                        <a class="dropdown-item" href="/admin/">Go to Admin</a>
                                    <?}?>
                                    <a class="dropdown-item" href="/page/logout/">Logout</a>
                                </div>
                            </li>
                        <?} else {?>
                            <li class="ml-auto dropdown break-1213-none">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownProfile">
                                    <a class="dropdown-item" href="/page/sginup/"><i class="fas fa-user"></i> Register</a>
                                    <a class="dropdown-item" href="/page/login/"><i class="fas fa-sign-in-alt"></i> Login</a>
                                </div>
                            </li>
                        <?}?>
                    </ul>
                </div>
                <div class="col-md-4 break-1213">
                    <ul class="navbar-nav justify-content-end">
                        <?if (!Yii::$app->user->isGuest) {?>
                            <li class="mr-2">
                                <a class="nav-link" href="<?= Url::toRoute(['page/cabinet']) ?>">My page</a>
                            </li>
                            <?if (in_array(Yii::$app->user->identity->email, Yii::$app->params['admins'])) {?>
                                <li class="mr-2">
                                    <a class="nav-link" href="/admin/">Go to Admin</a>
                                </li>
                            <?}?>
                            <li class="mr-2">
                                <a class="nav-link" href="<?= Url::toRoute(['page/logout']) ?>">Logout</a>
                            </li>
                        <?} else {?>
                            <li class="mr-2">
                                <a class="nav-link" href="<?= Url::toRoute('page/signup'); ?>"><i class="fas fa-user"></i> Register</a>
                            </li>
                            <li class="mr-2">
                                <a class="nav-link" href="<?= Url::toRoute('page/login'); ?>"><i class="fas fa-sign-in-alt"></i> Login</a>
                            </li>
                        <?}?>
                    </ul>
                </div>
            </div>
            <form class="row w-100"  method="get" action="<?= Url::toRoute('page/search'); ?>">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="input-group mt-1">
                        <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search" value="<?=isset($q) ? $q : ''?>">
                        <button class="btn btn-default mr-2" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-8 col-12 nav-form-span">
                    <span style="color: #ffd500;">Registered companies: </span>
                    <span style="color: #ffffff;"><?= count(User::find()->where(['status' => '10'])->asArray()->all()) ?></span>
                    <br>
                    <span style="color: #ffd500;">Online:</span>
                    <span style="color: #ffffff;"><?= count(Online::find()->where(['>', 'lastvisit', (time() - 600)])->asArray()->all()) ?></span>
                </div>
                <div class="col-md-3 col-sm-2 col-6 dropdown text-right select-country">
                    <a class="dropdown-toggle mr-4" href="#" id="dropdownAuction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-ru"></span>
                    </a>
                    <div class="dropdown-menu country" aria-labelledby="dropdownAuction">
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-us"></span> English</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ru"></span> Русский</a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ae"></span> العربية </a>
                        <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span> Francias</a>
                    </div>
                    <div class="d-inline timezone-block">
                        <?php
                        $arrSelect = [];
                        $tzList = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
                        foreach ($tzList as $key => $value) {
                            $offset = timezone_offset_get(new DateTimeZone($value), new DateTime());
                            $arrSelect[] = ['key' => timezone_offset_string($offset), 'value' => $value];
                        }?>
                        <a class="dropdown-toggle timezone" href="#" id="dropdownTimezone" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            --:-- Def
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownTimezone">
                            <?foreach ($arrSelect as $k => $v) {?>
                                <a class="dropdown-item" href="#" data-gmt="<?=$v['key']?>" data-obr="<?=substr(end(explode('/', $v['value'])), 0, 3)?>">(GMT <?=$v['key']?>) <?=$v['value']?></a>
                            <?}?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</header>
<?if (Yii::$app->request->url != '/') {?>
    <div class="container">
<?}?>
        <?= Alert::widget() ?>
        <?= $content; ?>
<?if (Yii::$app->request->url != '/') {?>
    </div>
<?}?>

<footer class="bg-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12">
                <h3>Services and sales</h3>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/page/catalog-drilling/">Oil Drilling Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="">Equipment For Sale & Rent</a>
                    </li>
                    <li class="nav-item">
                        <a href="/page/auction-catalog/">Auctions</a>
                    </li>
                    <li class="nav-item">
                        <a href="/tender/">Tender</a>
                    </li>
                    <li class="nav-item">
                        <a href="/page/auction-lists/">Auctions Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/page/listnews/">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="/page/contacts/">Contacts</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <h3>Information</h3>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= Url::toRoute('page/delivery'); ?>">Delivery</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::toRoute('page/payment'); ?>">Payment</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::toRoute('page/aboutcompany'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::toRoute('page/feedback'); ?>">Feedback</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 col-12 contacts">
                <h3>Contacts</h3>
                <?$contacts = Contacts::find()->asArray()->All();
                foreach ($contacts as $contact) {?>
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Address: <?php echo $contact['index_city'], ', ', $contact['city'], ', ', $contact['street'], ', ', $contact['number_home']; ?>
                    </p>
                    <p><i class="fas fa-phone"></i> Support: <a href="tel:<?= str_replace(' ', '', $contact['number_f']); ?>"><?= $contact['number_f']; ?></a></p>
                    <p><i class="fas fa-envelope"></i> E-mail: <a href="mailto:<?= $contact['mail']; ?>"><?= $contact['mail']; ?></a></p>
                <?}?>
            </div>
        </div>
    </div>
</footer>
<div class="text-center copy bg-dark">
    <?php
    $url = "$_SERVER[REQUEST_URI]";
    $view = Views::findOne(['page' => substr($url, 6)]);
    if ($view) {
        $view->views += 1;
        $view->save();
    }
    if ($view) {?>
        <!--<p>Views this page: <?/*= $view->views */?></p>-->
        <p>STIGL F.Z.E. © <?php $a = getdate();
            echo $a['year']; ?></p>
    <?} else {?>
        <p>STIGL F.Z.E. © <?php $a = getdate();
            echo $a['year']; ?></p>
    <?}?>
</div>

<div id="cart" class="fade modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2>List of applications for the manager</h2>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Continue browsing</button>
                <a href="/cart/view" class="btn btn-success-cart">Make a request</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Clear the list</button>

            </div>
        </div>
    </div>
</div>
<!--Если раскоментить Alert, то во время оформления заказа будет дублироваться уведомление в footer-->
<? //= Alert::widget()?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
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
