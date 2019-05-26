<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;
$this->title = 'STIGL - List Oil';
?>
<div class="content">
    <div class="main-drill">
        <div class="drill_description">
            <?php $mainImgCategory = $categoriesDrilling->getImage(); ?>
            <div class="drill_image"><?= Html::img($mainImgCategory->getUrl(), ['alt' => $categoriesDrilling->name])?></div>
            <div class="description-text">
                <h2><?php echo $categoriesDrilling['name'];?></h2>
                <p><?php echo $categoriesDrilling['description'];?></p>
            </div>
        </div>
        <div class="collumn-text">
            <div class="col-md-6 service_left">
                <?php echo $categoriesDrilling['service_left'];?>
            </div>
            <div class="col-md-6 service_right">
                <?php echo $categoriesDrilling['service_right'];?>
            </div>
        </div>
        <script src="../../web/js/readmore.min.js"></script>
        <script>
            $('.collumn-text').readmore({
                maxHeight: 240,
                moreLink: '<a href="#">Read more...</a>',
                lessLink: '<a href="#">Hide text</a>'
            });
        </script>
    </div>
</div>