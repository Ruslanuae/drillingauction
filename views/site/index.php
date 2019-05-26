<?php

/* @var $this yii\web\View */

use app\models\News;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

$this->title = 'STIGL';
$this->registerCssFile('http://'.$_SERVER['SERVER_NAME'], ['rel' => canonical])
?>
<div class="main-video">
    <video autoplay="" loop="" muted="">
        <source src="/images/video/Stigl.mp4" type="video/mp4">
        <source src="/images/video/Stigl.webm" type="video/webm">
        <source src="/images/video/Stigl.ogv" type="video/ogg">
    </video>
    <a class="button_voice button_voice__mute mute"><span class="animMute"></span></a>
    <div class="main-video-download">
        <a class="btn btn-outline-default" href="/catalog.pdf">Download Catalog</a>
        <a class="btn btn-outline-default" href="/images/video/Stigl.mp4">Download Presentation</a>
    </div>
</div>
<div class="row main-row">
    <div class="col-md-6">
        <div class="main-card">
            <h4>ADAPTER SPOOL 21 1/4” spacerspool</h4>
            <div>
                Model: 21 1/4” spacerspool
                Place of origin: Shaanxi
                Application: Connection wellhead, manifold
                Material: AISI4130
                Processing: Integral Forged
                Working pressure: 2000 psi
                End connection: API6A flange
                Length: As per request
                Color: Red or as per request
            </div>
            <a class="btn btn-default" href="/catalog.pdf">DOWNLOAD CATALOG</a>
        </div>
    </div>

    <div class="col-md-6">
        <img class="main-img" src="images/card-1.png">
    </div>
</div>
<div class="main-products text-center bg-blue">
    <span class="btn d-md-inline-block d-sm-inline-block d-none">HOT LOG  <b>345</b></span>
    <h3 class="ml-5 mr-5">New products</h3>
    <a class="btn btn-outline-default d-md-inline-block d-sm-inline-block d-none" href="#">AUCTIONS</a>
    <!--mobile-->
    <span class="btn d-md-none d-sm-none d-inline-block" style="margin-top: 15px;">HOT LOG  <b>345</b></span>
    <a class="btn btn-outline-default d-md-none d-sm-none d-inline-block" style="margin-top: 15px;" href="#">AUCTIONS</a>
</div>
<div class="main-products-slider">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="images/s1.png">
            <div class="main-products-slider-title">ADAPTER SPOOL 21 1/4” spacerspool</div>
            <div class="main-products-slider-title">Date sale:2018-08-20 18:05:00</div>
            <a class="btn btn-primary mb-2" href="#">Join Auction NOW! </a>
        </div>
        <div class="col-md-4 text-center">
            <img src="images/s2.png">
            <div class="main-products-slider-title">ADAPTER SPOOL 21 1/4” spacerspool</div>
            <div class="main-products-slider-title">Date sale:2018-08-20 18:05:00</div>
            <a class="btn btn-primary mb-2" href="#">Join Auction NOW! </a>
        </div>
        <div class="col-md-4 text-center">
            <img src="images/s3.png">
            <div class="main-products-slider-title">ADAPTER SPOOL 21 1/4” spacerspool</div>
            <div class="main-products-slider-title">Date sale:2018-08-20 18:05:00</div>
            <a class="btn btn-primary mb-2" href="#">Join Auction NOW! </a>
        </div>
    </div>
</div>
<div class="main-tender">
    <div class="row main-bg-tender justify-content-end">
        <div class="col-md-6">
            <div class="main-tender-text">
                <h2>Tender</h2>
                <div>
                    STIGL FZE was established in 2003 with a primary objective of provid
                    support services to the oil, gas and drilling industries as a supplier
                    drilling and industrial products. STIGL FZE is Equipment and Service
                    Supplier to the Oil & Gas industry with its main focus on the Drilling and
                    Workover sector. Our Equipment includes the Rental and Sales of
                </div>
                <a class="btn btn-default" href="/catalog.pdf">DOWNLOAD CATALOG</a>
            </div>
        </div>
    </div>
</div>
<div class="main-tender-lost main-bg-tender-lost">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="main-tender-text">
                <div>
                    STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and
                    drilling industries as a supplier of oilfield
                    drilling and industrial products. STIGL FZE is Equipment and Service Supplier to the Oil & Gas industry with
                    its main focus on the Drilling and
                    Workover sector. Our Equipment includes the Rental and Sales of Pressure Control Equipment, Downhole Tools,
                    Drill Pipe and Tubulars.
                    STIGL FZE provides the complete well control system solution for all types of well activity.
                </div>
                <a class="btn btn-default" href="/catalog.pdf">DOWNLOAD CATALOG</a>
            </div>
        </div>
    </div>
</div>