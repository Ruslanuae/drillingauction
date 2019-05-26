<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Search;
use app\models\Categories;
use app\models\User;
use app\models\Contacts;
$model = new Search();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/images/ico/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title)?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <div class="row header_top">
            <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="/"><img src="/images/logo.png"></a>
            </div>
            <div class="btn_top_wrap col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="btn_and_search">
                    <div class="btn_top">
                        <?php if(!Yii::$app->user->isGuest): ?>
                            <a href="<?=Url::toRoute(['page/cabinet', 'id' => Yii::$app->user->id])?>"><i class="glyphicon glyphicon-lock"></i>Personal Area</a>
                        <?php else: ?>
                            <a href="<?=Url::toRoute('page/signup');?>"><i class="glyphicon glyphicon-registration-mark"></i>Sign Up</a>
                            <a href="<?=Url::toRoute('page/login');?>"><i class="glyphicon glyphicon-lock"></i>Login</a>
                        <?php endif;?>
                        <a href="#" onclick="return getCart()"><i class="glyphicon glyphicon-list-alt"></i>Orders</a>
                    </div>
                    <div class="search_top">
                        <?php $form = ActiveForm::begin(); ?>
                        <?= $form->field($model, 'q')->textInput(['class' => 'search_top', 'id' => 'seacrh', 'placeholder' => 'Search by product'])->label('')?>
                        <button type="submit" class = "search_top" id="seacrh" name="submit_search"><i class="glyphicon glyphicon-search"></i></button>
                        <?php $form = ActiveForm::end(); ?>
                    </div>
                </div>
                <div class="cart_top">
                    <a href="#" onclick="return getCart()">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span>0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid menu_top">
        <div class="container">
            <div class="row">
                <ul id="nav">
                    <li>
                        <a href="/site/index" title="Home">Home</a>
                    </li>
                    <li>
                        <a href="/page/catalog" title="Production">Production</a>
<!--                        <ul>-->
<!--                            --><?php
//                            $categories = Categories::find()->asArray()->all();
//                            if(isset($categories))
//                            {
//                                foreach ($categories as $category):?>
<!--                                    <li><a href="--><?//=Url::toRoute(['page/listproducts', 'id' =>$category['id']]);?><!--">--><?php //echo $category['name'];?><!--</a></li>-->
<!--                                --><?php //endforeach;
//                            }
//                            ?>
<!--                        </ul>-->
                    </li>
                    <li>
                        <a href="/page/catalog-drilling" title="Oil Drilling">Oil Drilling</a>
                    </li>
                    <li>
                        <a href="/page/catalog-lease" title="Lease productions">Lease</a>
                    </li>
                    <li>
                        <a href="/page/auction-catalog" title="Аукцион">Аукцион</a>
                        <ul>
                            <li><a href="/page/auction-catalog">Лоты</a></li>
                            <li><a href="/page/auction-lists">Календарь аукционов</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/page/listnews" title="News Company">News</a>
                    </li>
                    <li>
                        <a href="/page/contacts" title="Contacts Company">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!--НАБРОСКИ НОВОГО ДИЗАЙНА-->
<!--<div class="container">
    <div class="content">
<section class="mockup-section paint-area">
    <div class="mockup-content mockup-grid">
        <div class="mockup-grid__item mockup-width--half">
            <h3 class="mockup-heading mockup-heading--large paint-area paint-area--text">We help to tell the history of our company<span class="mockup-heading__subline">The most efficient equipment for businesses</span></h3>
                <button class="mockup-button paint-area"><span>Discover more</span> <i class="fa fa-chevron-down"></i></button>
        </div>
        <figure class="mockup-grid__item mockup-width--half">
            <div class="mockup-img mockup-img--large">
                <img style="width: 460px" src="http://www.auto.shtrih-m.ru/assets/i-content/images/Klienty/snh-2.jpg">
            </div>
        </figure>
    </div>< /mockup-grid
</section>
        </div>
</div>-->
<div class="container ban_block_wrap">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ban_block ban1">
            <div>
                <img src="/images/banner/1.jpeg">
                <a href="<?=Url::toRoute('page/catalog');?>">
                    <h2>Drilling equipment</h2>
                    <p>Complex of engineering products.</p>
                    <span>Learn More</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ban_block">
            <div>
                <img src="/images/banner/2.jpg">
                <a href="<?=Url::toRoute('page/catalog');?>">
                    <h2>Production equipment</h2>
                    <p>The totality of various kinds of machines and mechanisms.</p>
                    <span>Learn More</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?//=$content;?>
<div class="container-fluid write_email_and_sseti">
    <div class="container">
        <div class="row write_email_and_sseti_wrap">
            <!-- <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 write_email">
                 <p>Рассылка</p>
                 <form>
                     <button type="submit">
                         <i class="glyphicon glyphicon-chevron-right"></i>
                     </button>
                     <input type="text" placeholder="Введите E-mail">
                 </form>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-5 hidden-xs sseti_wrap">
                <div>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-vk"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>-->
        </div>
    </div>
</div>
<div class="container-fluid footer">
    <div class="container">
        <div class="row menu_footer_and_contact">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="footer_menu">
                    <h3>Services and sales</h3>
                    <ul>
                        <?php if(isset($categories)){
                            foreach ($categories as $category):?>
                                <li><a href="<?=Url::toRoute(['page/listproducts', 'id' =>$category['id']]);?>"><?php echo $category['name'];?></a></li>
                            <?php endforeach;}?>
                    </ul>
                </div>
                <div class="footer_menu">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="<?=Url::toRoute('page/delivery');?>">Delivery</a></li>
                        <li><a href="<?=Url::toRoute('page/payment');?>">Payment</a></li>
                        <li><a href="<?=Url::toRoute('page/aboutcompany');?>">About Company</a></li>
                        <li><a href="<?=Url::toRoute('page/feedback');?>">Feedback</a></li>
                    </ul>
                </div>
                <div class="footer_menu">
                    <h3>Account</h3>
                    <ul>
                        <?php if(!Yii::$app->user->isGuest): ?>
                            <li><a href="<?=Url::toRoute(['page/cabinet', 'id' => Yii::$app->user->id])?>">Personal Area</a></li>
                        <?php else: ?>
                            <li><a href="<?=Url::toRoute('page/login');?>">Login-2</a></li>
                            <li><a href="<?=Url::toRoute('page/signup');?>">Sign Up</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contacts">
                <h3>Contacts</h3>
                <?php $contacts = Contacts::find()->asArray()->All();
                foreach ($contacts as $contact):?>
                    <p><i class="glyphicon glyphicon-map-marker"></i>Address: <?php echo $contact['index_city'],', ', $contact['city'],', ',$contact['street'],', ',$contact['number_home'];?> </p>
                    <p><i class="glyphicon glyphicon-phone-alt"></i>Support: <?php echo $contact['number_f'];?></p>
                    <p><i class="glyphicon glyphicon-envelope"></i>E-mail: <?php echo $contact['mail'];?></p>
                <?php endforeach;?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 copy">
                <center><p>STIGL International © <?php $a = getdate(); echo $a['year']; ?></p></center>
            </div>
        </div>
    </div>
</div>
<?php
\yii\bootstrap\Modal::begin
([
    'header' => '<h2>List Order</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '
        <button type="button" class="btn btn-default" data-dismiss="modal">Continue shopping</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Checkout</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Clear the list</button>
']);
\yii\bootstrap\Modal::end();
?>
<!--Если раскоментить Alert, то во время оформления заказа будет дублироваться уведомление в footer-->
<?//= Alert::widget()?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage()?>