<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\models\Categories;
use app\assets\DefaultAsset;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Search;
use app\models\Contacts;

$this->registerCssFile('/css/table.css');
$model = new Search();
DefaultAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container">
    <div class="row">
        <?= Alert::widget() ?>
        <!--        <iframe src="http://im-yii-copy/page/auction-real-time?id=6" width="100%" height="1200px" frameborder="1"> </iframe>-->
        <?= $content; ?>
    </div>
    <div class="cbalink">

    </div>
</div>
<!--Если раскоментить Alert, то во время оформления заказа будет дублироваться уведомление в footer-->
<? //= Alert::widget()?>
<?php $this->endBody() ?>
<!--<script type="text/javascript" src="/js/echo_server.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->
</body>
</html>
<?php $this->endPage() ?>
