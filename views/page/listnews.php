<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\models\News;

$this->title = 'STIGL - News Company';
?>
<div class="col-md-12">
    <?php foreach ($news_array as $new_array):
    $id_n = $new_array['id'];
    $query_n = News::findOne($id_n);
    $mainImgNew = $query_n -> getImage();?>
    <div class="row content">
            <div class="col-md-4 new_company">
                <a href="<?=Url::toRoute(['page/new', 'id' =>$new_array['id']]);?>" class="new_company_img">
                <?= Html::img($mainImgNew->getUrl(), ['alt' => $new_array->name, 'class' => 'img-fluid']) ?></a>
            </div>
            <div class="col-md-5 new_company">
                <div class="data-news"><?php echo $new_array['data'];?></div>

                <div class="news-text">
                   <p><?php echo \yii\helpers\StringHelper::truncate($new_array['text'], 400, '...');?></p>
                </div>
                <div class="new_company_btn">
                    
                    <a class="btn btn-primary" href = "<?= \yii\helpers\Url::to(['page/new', 'id' => $new_array['id']])?>" alt="View New Company" >Read More</a>
                </div>
            </div>

            <div class="col-md-3">
            <div class="left-news">
              <div class="New-products">New products <span>AUCTIONS</span></div>
              <div class="bloc-r">

                <div><img class="r-img" src="/images/r-img.png"></div>
                <div class="neim-pro">ADAPTER SPOOL 21 <br> 1/4” spacerspool</div>
                <div class="Date-sale">Date sale</div>
                <div class="date">2018-08-20 <span>18:05:00</span></div>
                <div class="text-center">
                    <a class="btn btn-primary" href="#">Join Auction NOW!</a>
                </div>
              </div>

            </div>
          </div>

    </div>
    <?php endforeach;?>
</div>

<div class="clearfix"></div>
<?php echo \yii\widgets\LinkPager::widget(['pagination' => $pages, ]); ?>