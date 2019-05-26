<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use app\models\Cart;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = 'STIGL - News Company'; ?>

<div class="col-md-12 col-sm-12 col-12">
    <?php
    $mainImg = $new->getImage();
    //debug($mainImg);
    ?>
    <div class="row content">
        <div class="col-md-12">
            <div class="row content">
                <div class="col-md-9 new_company">
                    <h3 class="new_company_title"><?php echo $new['name'];?></h3>

                    <div class="slider_news">
                        <?= Html::img($mainImg->getUrl(), ['alt' => $new->name, 'class' => 'img-fluid']) ?>
                    </div>

                    <div class="text">
                        <p><?php echo $new['text'];?></p>
                    </div>
                    <div class="new_company_btn_backward">
                        <div class="data-osnova">
                            <span><img class="" src="/images/ok.png"></span>
                            <span class="like">231</span>
                            <span><img class="" src="/images/noo.png"></span>
                            <span class="like">58</span>
                            <span class="like data-like"><?php echo $new['data'];?></span>
                            <span><img class="" src="/images/seti.png"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                      <div class="left-news left-news-dop slider_news-tovar-left">
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
            </div>
        </div>
    </div>
</div>

