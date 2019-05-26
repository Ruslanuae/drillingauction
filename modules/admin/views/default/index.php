<?php

use app\modules\admin\models\ImportMail;
use \app\modules\admin\models\Order;
use app\modules\admin\models\RateHistory;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;

$Order = Order::find()->where('created_at > DATE_SUB(CURDATE(), INTERVAL 1 DAY)')->count();
$RateHistory = RateHistory::find()->where('bid_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)')->count();
$ImportMail = ImportMail::find()->count();
?>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Использовано памяти</p>
                <h3 class="card-title">
                    <?=formatBytes(disk_free_space ( '/' ))?>/<?= formatBytes(disk_total_space ( '/' ));?>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">storage</i>
                    Свободный и общий размер диска
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">shopping_basket</i>
                </div>
                <p class="card-category">Последние заказы</p>
                <h3 class="card-title"><?=$Order?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> За 24 часа
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">gavel</i>
                </div>
                <p class="card-category">Последние ставки</p>
                <h3 class="card-title"><?=$RateHistory?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> За 24 часа
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                </div>
                <p class="card-category">Подписались на рассылку</p>
                <h3 class="card-title">+<?=$ImportMail?></h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Общее количество
                </div>
            </div>
        </div>
    </div>
</div>

