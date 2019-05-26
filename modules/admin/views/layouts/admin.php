<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AdminAsset;
use yii\helpers\Html;
use app\models\Search;
use yii\widgets\Breadcrumbs;

$model = new Search();
AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <!-- Required meta tags -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper ">
    <div class="sidebar" data-color="blue" data-background-color="white">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
        -->
        <div class="logo">
            <!--<a href="/" class="simple-text logo-mini">ST</a>-->
            <a href="/" class="simple-text logo-normal">
                <img src="/images/logo-admin.png">
            </a>
        </div>
        <?$thisUrl = '/' . Yii::$app->controller->id . '/' .Yii::$app->controller->action->id . '/';?>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <?php $active = (in_array($thisUrl, [
                    '/default/index/',
                ])) ? ' active' : '';?>
                <li class="nav-item<?=$active?>">
                    <a class="nav-link" href="/admin/">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/auction-date/index/',
                    '/auction-date/create/',
                    '/auction-date/update/',
                    '/auction-date/view/',
                    '/lot-condition/index/',
                    '/lot-condition/create/',
                    '/lot-condition/update/',
                    '/lot-condition/view/',
                    '/product-condition/index/',
                    '/product-condition/index/',
                    '/product-condition/create/',
                    '/product-condition/update/',
                    '/product-condition/update/',
                    '/rate-history/index/',
                    '/rate-history/create/',
                    '/rate-history/update/',
                    '/rate-history/view/',
                    '/victory-user/index/',
                    '/victory-user/create/',
                    '/victory-user/update/',
                    '/victory-user/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item treeview<?=$active?>">
                    <a class="nav-link" href="#">
                        <i class="material-icons">gavel</i>
                        <p>Аукцион</p>
                    </a>
                    <?php $show = (in_array($thisUrl, [
                        '/auction-date/index/',
                        '/auction-date/create/',
                        '/auction-date/update/',
                        '/auction-date/view/',
                        '/lot-condition/index/',
                        '/lot-condition/create/',
                        '/lot-condition/update/',
                        '/lot-condition/view/',
                        '/product-condition/index/',
                        '/product-condition/index/',
                        '/product-condition/create/',
                        '/product-condition/update/',
                        '/product-condition/update/',
                        '/rate-history/index/',
                        '/rate-history/create/',
                        '/rate-history/update/',
                        '/rate-history/view/',
                        '/victory-user/index/',
                        '/victory-user/create/',
                        '/victory-user/update/',
                        '/victory-user/view/',
                    ])) ? ' show' : '';?>
                    <ul class="treeview-menu<?=$show?>">
                        <!--<li><a href="/admin/lots/">Лоты</a></li>-->
                        <!--<li><a href="/admin/lots-categories/">Категории</a></li>-->
                        <?php/* $classActive = (in_array($thisUrl, [
                            '/auctions-lots/index/',
                            '/auctions-lots/create/',
                            '/auctions-lots/update/',
                            '/auctions-lots/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$classActive?>><a href="/admin/auctions-lots/">Таблица связи продукта с аукцином</a></li>
                        <?*/?>
                        <?php $classActive = (in_array($thisUrl, [
                            '/auction-date/index/',
                            '/auction-date/create/',
                            '/auction-date/update/',
                            '/auction-date/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$classActive?>><a href="/admin/auction-date/">Календарь аукционов</a></li>
                        <?php $classActive = (in_array($thisUrl, [
                            '/lot-condition/index/',
                            '/lot-condition/create/',
                            '/lot-condition/update/',
                            '/lot-condition/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$classActive?>><a href="/admin/lot-condition/">Состояние лотов</a></li>
                        <?php $classActive = (in_array($thisUrl, [
                            '/product-condition/index/',
                            '/product-condition/create/',
                            '/product-condition/update/',
                            '/product-condition/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$classActive?>><a href="/admin/product-condition/">Состояния товара</a></li>
                        <?php $classActive = (in_array($thisUrl, [
                            '/rate-history/index/',
                            '/rate-history/create/',
                            '/rate-history/update/',
                            '/rate-history/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$classActive?>><a href="/admin/rate-history/">История ставок</a></li>
                        <?php $classActive = (in_array($thisUrl, [
                            '/victory-user/index/',
                            '/victory-user/create/',
                            '/victory-user/update/',
                            '/victory-user/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$classActive?>><a href="/admin/victory-user/">Победители аукциона</a></li>
                    </ul>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/order/index/',
                    '/order/update/',
                    '/order/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item<?=$active?>">
                    <a class="nav-link" href="/admin/order/">
                        <i class="material-icons">shopping_basket</i>
                        <p>Заказы</p>
                    </a>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/categories-drilling/index/',
                    '/categories-drilling/create/',
                    '/categories-drilling/update/',
                    '/categories-drilling/view/',
                    '/products/index/',
                    '/products/create/',
                    '/products/update/',
                    '/products/view/',
                    '/categories/index/',
                    '/categories/create/',
                    '/categories/update/',
                    '/categories/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item treeview<?=$active?>">
                    <a class="nav-link" href="#">
                        <i class="material-icons">business</i>
                        <p>Товары и услуги компании</p>
                    </a>
                    <?php $show = (in_array($thisUrl, [
                        '/categories-drilling/index/',
                        '/categories-drilling/create/',
                        '/categories-drilling/update/',
                        '/categories-drilling/view/',
                        '/products/index/',
                        '/products/create/',
                        '/products/update/',
                        '/products/view/',
                        '/categories/index/',
                        '/categories/create/',
                        '/categories/update/',
                        '/categories/view/',
                    ])) ? ' show' : '';?>
                    <ul class="treeview-menu<?=$show?>">
                        <?php $activeClass = (in_array($thisUrl, [
                            '/categories-drilling/index/',
                            '/categories-drilling/create/',
                            '/categories-drilling/update/',
                            '/categories-drilling/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$activeClass?>><a href="/admin/categories-drilling/">Услуги по бурению нефти</a></li>
                        <!--<li><a href="/admin/products-lease">Аренда</a></li>-->
                        <!--<li><a href="/admin/categories-lease">Категории аренды</a></li>-->
                        <?php $activeClass = (in_array($thisUrl, [
                            '/products/index/',
                            '/products/create/',
                            '/products/update/',
                            '/products/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$activeClass?>><a href="/admin/products/">Товары</a></li>
                        <?php $activeClass = (in_array($thisUrl, [
                            '/categories/index/',
                            '/categories/create/',
                            '/categories/update/',
                            '/categories/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$activeClass?>><a href="/admin/categories/">Категории товаров</a></li>
                        <!--<li><a href="#">Тендер</a></li>-->
                    </ul>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/user/index/',
                    '/user/update/',
                    '/user/view/',
                    '/user-deposit/index/',
                    '/user-deposit/update/',
                    '/user-deposit/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item treeview<?=$active?>">
                    <a class="nav-link" href="#">
                        <i class="material-icons">person</i>
                        <p>Пользователи</p>
                    </a>
                    <?php $show = (in_array($thisUrl, [
                        '/user/index/',
                        '/user/update/',
                        '/user/view/',
                        '/user-deposit/index/',
                        '/user-deposit/update/',
                        '/user-deposit/view/',
                    ])) ? ' show' : '';?>
                    <ul class="treeview-menu<?=$show?>">
                        <?php $activeClass = (in_array($thisUrl, [
                            '/user/index/',
                            '/user/update/',
                            '/user/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$activeClass?>><a href="/admin/user/">Управление пользователями</a></li>
                        <?php $activeClass = (in_array($thisUrl, [
                            '/user-deposit/index/',
                            '/user-deposit/update/',
                            '/user-deposit/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$activeClass?>><a href="/admin/user-deposit/">Депозит пользователей</a></li>
                    </ul>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/news/index/',
                    '/news/create/',
                    '/news/update/',
                    '/news/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item<?=$active?>">
                    <a class="nav-link" href="/admin/news/">
                        <i class="material-icons">book</i>
                        <p>Новости</p>
                    </a>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/contacts/index/',
                    '/contacts/create/',
                    '/contacts/update/',
                    '/contacts/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item<?=$active?>">
                    <a class="nav-link" href="/admin/contacts/">
                        <i class="material-icons">feedback</i>
                        <p>Контакты</p>
                    </a>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/sending-messages/index/',
                    '/sending-messages/view/',
                    '/import-mail/index/',
                    '/import-mail/create/',
                    '/import-mail/update/',
                    '/import-mail/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item treeview<?=$active?>">
                    <a class="nav-link" href="#">
                        <i class="material-icons">speaker_notes</i>
                        <p>Массовая рассылка</p>
                    </a>
                    <?php $show = (in_array($thisUrl, [
                        '/sending-messages/index/',
                        '/sending-messages/view/',
                        '/import-mail/index/',
                        '/import-mail/create/',
                        '/import-mail/update/',
                        '/import-mail/view/',
                    ])) ? ' show' : '';?>
                    <ul class="treeview-menu<?=$show?>">
                        <?php $activeClass = (in_array($thisUrl, [
                            '/sending-messages/index/',
                            '/sending-messages/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$activeClass?>><a href="/admin/sending-messages/">Отправить сообщение</a></li>
                        <?php $activeClass = (in_array($thisUrl, [
                            '/import-mail/index/',
                            '/import-mail/create/',
                            '/import-mail/update/',
                            '/import-mail/view/',
                        ])) ? ' class="active"' : '';?>
                        <li<?=$activeClass?>><a href="/admin/import-mail/">БД импортированных E-mail</a></li>
                    </ul>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/image/index/',
                    '/image/update/',
                    '/image/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item<?=$active?>">
                    <a class="nav-link" href="/admin/image/">
                        <i class="material-icons">brightness_high</i>
                        <p>Таблица изображений</p>
                    </a>
                </li>
                <?php $active = (in_array($thisUrl, [
                    '/tender/index/',
                    '/tender/create/',
                    '/tender/update/',
                    '/tender/view/',
                ])) ? ' active' : '';?>
                <li class="nav-item<?=$active?>">
                    <a class="nav-link" href="/admin/tender/">
                        <i class="material-icons">attach_money</i>
                        <p>Тендеры</p>
                    </a>
                </li>
                <!-- your sidebar here -->
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <!--<a class="navbar-brand" href="/admin/">Dashboard</a>-->
                    <?=Breadcrumbs::widget([
                        'homeLink' => ['label' => 'Dashboard', 'url' => '/admin/'],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]);?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <!--<li class="nav-item">
                            <a class="nav-link" href="/admin/">
                                <i class="material-icons">notifications</i> Notifications
                            </a>
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i> Account
                                <div class="ripple-container"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="/page/cabinet/">Кабинет</a>
                                <a class="dropdown-item" href="/">На сайт</a>
                                <!--<a class="dropdown-item" href="#">Settings</a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/page/logout/">Выход</a>
                            </div>
                        </li>
                        <!-- your navbar here -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <?=$content; ?>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="/">
                                STIGL International © <?=date('Y');?>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- your footer here -->
            </div>
        </footer>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
