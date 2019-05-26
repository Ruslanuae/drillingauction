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
use app\models\Views;
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
    <meta name="yandex-verification" content="d9ae16504599b08b"/>
    <meta name="keywords"
          content="STIGL FZE,STIGL,FZE,Free Zone,Ajman Free Zone,Ajman,Company,oildrilling,oil,Adam Salathanov">
    <meta name="description"
          content="STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and drilling industries as a supplier of oilfield drilling and industrial products.">
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="stylesheet" href="../../web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../web/css/main.css">

    <link rel="stylesheet" href="/css/slick/slick.css"/>
    <link rel="stylesheet" href="/css/slick/slick-theme.css"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/jquery.vide.min.js"></script>
    <script type="text/javascript" src="/js/slick/slick.min.js"></script>

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
<section class="top-p-video">
    <div class="head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <div class="icon-top-menu">
                        <i class="fas fa-align-justify"></i>
                    </div>


                    <div class="top-menu">
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
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/page/catalog-drilling">Oil Drilling Services</a></li>
                            <li><a href="/page/sale-rent">Equipment For Sale & Rent</a></li>
                            <li><a href="/page/auction-catalog">Auctions</a></li>
                            <li><a href="/page/tender">Tender</a></li>
                            <li><a href="/page/auction-lists">Auctions Calendar</a></li>
                            <li><a href="/page/listnews">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="/"><img class="logo-img" src="/images/logo.png"></a>
                </div>

                <div class="col-lg-5">
                    <form id="search-lot_lot_2" method="get" action="<?= Url::toRoute('page/search'); ?>">
                        <img class="P-1" src="/images/P-1.png">
                        <input id="seacrh" name="search" aria-invalid="false" value="<?php isset($q) ? $q : '' ?>"
                               class="search"
                               type="text" placeholder="Search by Make, Model, Description, VIN or Lot number"
                               name="search">

                </div>

                <div class="col-lg-1">

                    <button type="submit" class="Search-button" id="seacrh_2">Search</button>
                    </form>
                </div>

                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="help">!</div>
                        </div>

                        <div class="col-xs-3">
                            <img class="Flag-ru" src="/images/ru.png">
                        </div>

                        <div class="col-xs-3">
                            <img class="Flag-us" src="/images/us.png">
                        </div>

                        <div class="col-xs-3">
                            <img class="Flag-oae" src="/images/oae.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="online"><span class="noo-Server-Time">Server Time: <?//= date('m/d/Y H:i', time()) ?><span id="currentTime"></span></span>Registered companies: <span>
              <?= count(User::find()->where(['status' => '10'])->asArray()->all()) ?>
            </span>
                        Online: <span>
                    <?= count(Online::find()->where(['>', 'lastvisit', (time() - 600)])->asArray()->all()) ?></span>
					
					<ul class="top-menu-login main-login">
						<?php if (!Yii::$app->user->isGuest): ?>
							<li><a href="<?= Url::toRoute(['page/cabinet', 'id' => Yii::$app->user->id]) ?>">My Account</a></li>
						<?php else: ?>
							<li><a href="<?= Url::toRoute('page/login'); ?>"></i>LogIn</a></li>
						<?php endif; ?>
					</ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="top-p-video">
    <div class="top-menu-mini" style="display: none;">
        <div class="i-exit"><i class="far fa-times-circle"></i></div>
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
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/page/catalog-drilling">Oil Drilling Services</a></li>
            <li><a href="">Equipment For Sale & Rent</a></li>
            <li><a href="/page/auction-catalog">Auctions</a></li>
            <li><a href="/page/tender">Tender</a></li>
            <li><a href="/page/auction-lists">Auctions Calendar</a></li>
            <li><a href="/page/listnews">News</a></li>
        </ul>
    </div>
</section>

<script>
    $(document).ready(function () {
        $(".icon-top-menu").click(function () {
            $(".top-menu-mini").slideToggle("slow");
            return false;
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".i-exit").click(function () {
            $(".top-menu-mini").slideToggle("slow");
            return false;
        });
    });
</script>


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
                        <li><a href="/page/sale-rent">Equipment For Sale & Rent</a></li>
                        <li><a href="/page/auction-catalog">Auctions</a></li>
                        <li><a href="/page/tender">Tender</a></li>
                        <li><a href="/page/auction-lists">Auctions Calendar</a></li>
                        <li><a href="/page/listnews">News</a></li>
                        <li><a href="/page/contacts">Contacts</a></li>
                    </ul>
                </div>
                <div class="footer_menu">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="<?= Url::toRoute('page/delivery'); ?>">Delivery</a></li>
                        <li><a href="<?= Url::toRoute('page/payment'); ?>">Payment</a></li>
                        <li><a href="<?= Url::toRoute('page/aboutcompany'); ?>">About</a></li>
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
                <?php
                $url = "$_SERVER[REQUEST_URI]";
                $view = Views::findOne(['page' => substr($url, 6)]);
                if ($view) {
                    $view->views += 1;
                    $view->save();
                }

                ?>
                <?php if ($view): ?>
                    <center><p>Views this page: <?= $view->views ?></p>
                        <p>STIGL F.Z.E. © <?php $a = getdate();
                            echo $a['year']; ?></p></center>
                <?php else: ?>
                    <center><p>STIGL F.Z.E. © <?php $a = getdate();
                            echo $a['year']; ?></p></center>
                <?php endif; ?>
            </div>
            <div class="cbalink"></div>
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
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        var widget_id = 'mSocodyfbp';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();</script>
	
		<script>
(function(){  // анонимная функция (function(){ })(), чтобы переменные "a" и "b" не стали глобальными
var a = document.querySelector('.top-p-video'), b = null;  // селектор блока, который нужно закрепить
window.addEventListener('scroll', Ascroll, false);
document.body.addEventListener('scroll', Ascroll, false);  // если у html и body высота равна 100%
function Ascroll() {
  if (b == null) {  // добавить потомка-обёртку, чтобы убрать зависимость с соседями
    var Sa = getComputedStyle(a, ''), s = '';
    for (var i = 0; i < Sa.length; i++) {  // перечислить стили CSS, которые нужно скопировать с родителя
      if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
        s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
      }
    }
    b = document.createElement('div');  // создать потомка
    b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
    a.insertBefore(b, a.firstChild);  // поместить потомка в цепляющийся блок первым
    var l = a.childNodes.length;
    for (var i = 1; i < l; i++) {  // переместить во вновь созданного потомка всех остальных потомков (итого: создан потомок-обёртка, внутри которого по прежнему работают скрипты)
      b.appendChild(a.childNodes[1]);
    }
    a.style.height = b.getBoundingClientRect().height + 'px';  // если под скользящим элементом есть другие блоки, можно своё значение
    a.style.padding = '0';
    a.style.border = '0';  // если элементу присвоен padding или border
  }
  if (a.getBoundingClientRect().top <= 0) { // elem.getBoundingClientRect() возвращает в px координаты элемента относительно верхнего левого угла области просмотра окна браузера
    b.className = 'sticky';
  } else {
    b.className = '';
  }
  window.addEventListener('resize', function() {
    a.children[0].style.width = getComputedStyle(a, '').width
  }, false);  // если изменить размер окна браузера, измениться ширина элемента
}
})()
</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
<?php $this->endPage() ?>
