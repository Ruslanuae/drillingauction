<?php

/* @var $this yii\web\View */

use app\models\News;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

$this->title = 'STIGL';
$this->registerCssFile('/css/demo.css');
$this->registerCssFile('/css/tooltip-classic.css');

?>
<!--BANNER-->


<section class="top-p-video-2">
    <div class="video-head" data-vide-bg="/images/video/Vegas-baby">
        <div class="play-head">
            <img src="images/play.png">
        </div>

        <div class="head-document">
            <span class="Download-head-1"><a href="#">Read More</a></span>
            <span class="Download-head"><a href="#">Download Presentation</a></span>
        </div>
    </div>
</section>


<section>
    <div class="fon-head-1">
        <div class="fon-head-ten"></div>
        <div class="slaider-glav-cont">
            <div class="slaider-glav">
                <div>

                    <div class="text-slaider-glav">


                        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarouse1" data-slide-to='0' class="active"></li>
                                <li data-target="#myCarousel" data-slide-to='1'></li>
                                <li data-target="#myCarousel" data-slide-to='2'></li>
                                <li data-target="#myCarousel" data-slide-to='3'></li>
                                <li data-target="#myCarousel" data-slide-to='4'></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="item">
                                        <img style="width:100%;opacity: 0;" src="../../web/images/banner/1.jpg" alt="1">
                                        <div class="carousel-cap">
                                            <div class="title-slaider-glav">Oil equipment auction</div>
                                            <div class="carousel-cap-text">A drilling rig is a machine which creates
                                                holes (usually called boreholes)
                                                and/or shafts in the ground. Drilling rigs can be massive structures
                                                housing
                                                equipment used to drill water wells, oil wells, or natural gas
                                                extraction wells or
                                                they can be small enough to be moved manually by one person.hey
                                                sample sub-surface
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item">
                                        <img style="width:100%;opacity: 0;" src="../../web/images/banner/2.jpg" alt="1">
                                        <div class="carousel-cap">
                                            <div class="title-slaider-glav">Oil equipment auction</div>
                                            <div class="carousel-cap-text">A drilling rig is a machine which creates
                                                holes (usually called boreholes)
                                                and/or shafts in the ground. Drilling rigs can be massive structures
                                                housing
                                                equipment used to drill water wells, oil wells, or natural gas
                                                extraction wells or
                                                they can be small enough to be moved manually by one person.hey
                                                sample sub-surface
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item">
                                        <img style="width:100%;opacity: 0;" src="../../web/images/banner/3.jpg" alt="1">
                                        <div class="carousel-cap">
                                            <div class="title-slaider-glav">Oil equipment auction</div>
                                            <div class="carousel-cap-text">A drilling rig is a machine which creates
                                                holes (usually called boreholes)
                                                and/or shafts in the ground. Drilling rigs can be massive structures
                                                housing
                                                equipment used to drill water wells, oil wells, or natural gas
                                                extraction wells or
                                                they can be small enough to be moved manually by one person.hey
                                                sample sub-surface
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item">
                                        <img style="width:100%;opacity: 0;" src="../../web/images/banner/4.jpg" alt="1">
                                        <div class="carousel-cap">
                                            <div class="title-slaider-glav">Oil equipment auction</div>
                                            <div class="carousel-cap-text">A drilling rig is a machine which creates
                                                holes (usually called boreholes)
                                                and/or shafts in the ground. Drilling rigs can be massive structures
                                                housing
                                                equipment used to drill water wells, oil wells, or natural gas
                                                extraction wells or
                                                they can be small enough to be moved manually by one person.hey
                                                sample sub-surface
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item">
                                        <img style="width:100%;opacity: 0;" src="../../web/images/banner/5.jpg" alt="1">
                                        <div class="carousel-cap">
                                            <div class="title-slaider-glav">Oil equipment auction</div>
                                            <div class="carousel-cap-text">A drilling rig is a machine which creates
                                                holes (usually called boreholes)
                                                and/or shafts in the ground. Drilling rigs can be massive structures
                                                housing
                                                equipment used to drill water wells, oil wells, or natural gas
                                                extraction wells or
                                                they can be small enough to be moved manually by one person.hey
                                                sample sub-surface
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" role="button" data-slide="prev"
                                   onclick="$(this).closest('.carousel').carousel('prev');">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    <span class="sr-only"></span>
                                </a>
                                <a class="right carousel-control" role="button" data-slide="next"
                                   onclick="$(this).closest('.carousel').carousel('next');">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    <span class="sr-only"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="New-products-head">
        <div>New products</div>
        <a href="#">AUCTIONS</a>
        <span>HOT LOG  <b>345</b></span>
    </div>
</section>

<section class="shadov-section">
    <div class="row">
        <div class="col-lg-6 dopol-col">
            <div class="card-glav">
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
                <div>
                    <a href="#">READ MORE</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 dopol-col">
            <img src="images/card-1.png">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 dopol-col">
            <img src="images/card-1.png">
        </div>

        <div class="col-lg-6 dopol-col">
            <div class="card-glav">
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
                <div>
                    <a href="#">READ MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="New-products-head">
        <div>New products</div>
        <a href="#">AUCTIONS</a>
        <span>HOT LOG  <b>345</b></span>
    </div>
</section>


<section class="nov-card-glav">


    <div class="mar-slaider-footer">
        <div class="slaider-glav-tovar">
            <div class="of-card-glatov">
                <img src="images/s1.png">
                <div class="slaid-title-gl">ADAPTER SPOOL 21 1/4” spacerspool</div>
                <div class="slaid-title-gl">Date sale:2018-08-20 18:05:00</div>
                <a href="#">Join Auction NOW! </a>
            </div>
            <div class="of-card-glatov">
                <img src="images/s2.png">
                <div class="slaid-title-gl">ADAPTER SPOOL 21 1/4” spacerspool</div>
                <div class="slaid-title-gl">Date sale:2018-08-20 18:05:00</div>
                <a href="#">Join Auction NOW! </a>
            </div>
            <div class="of-card-glatov">
                <img src="images/s3.png">
                <div class="slaid-title-gl">ADAPTER SPOOL 21 1/4” spacerspool</div>
                <div class="slaid-title-gl">Date sale:2018-08-20 18:05:00</div>
                <a href="#">Join Auction NOW! </a>
            </div>
        </div>

</section>

<section>
    <div class="row bg-row-bloc">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
            <div class="bg-row-bloc-text">
                <h2>Tender</h2>
                <div>STIGL FZE was established in 2003 with a primary objective of provid
                    support services to the oil, gas and drilling industries as a supplier
                    drilling and industrial products. STIGL FZE is Equipment and Service
                    Supplier to the Oil & Gas industry with its main focus on the Drilling and
                    Workover sector. Our Equipment includes the Rental and Sales of
                </div>

                <a href="#">READ MORE</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="bg-row-bloc-8">
        <div class="bg-row-gradient">
            STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and
            drilling industries as a supplier of oilfield
            drilling and industrial products. STIGL FZE is Equipment and Service Supplier to the Oil & Gas industry with
            its main focus on the Drilling and
            Workover sector. Our Equipment includes the Rental and Sales of Pressure Control Equipment, Downhole Tools,
            Drill Pipe and Tubulars.
            STIGL FZE provides the complete well control system solution for all types of well activity.
        </div>

        <div class="bg-row-bloc-8-read"><a href="#">READ MORE</a></div>
    </div>
</section>













