<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\ActiveForm;

$this->title = 'STIGL - Auction Lists';
?>


<div class="auction-list">
    <div class="content">
        <?php
        //$mainImg = $product_array->getImage();
        ?>
        <div class="view_list">
            <div class="auction">
                <div class="desc_prod text-center">
                    <?php
                    $today = date('m/d/Y', time());
                    $dayOfTheWeek = strftime("%a", strtotime($today));
                    $week = array();
                    switch ($dayOfTheWeek) {
                        case "Mon":
                            $week = array('Mon' => $today, 'Tue' => date('m/d/Y', strtotime($today . " +1 days")), 'Wed' => date('m/d/Y', strtotime($today . " +2 days")), 'Thu' => date('m/d/Y', strtotime($today . " +3 days")), 'Fri' => date('m/d/Y', strtotime($today . " +4 days")), 'Sat' => date('m/d/Y', strtotime($today . " +5 days")), 'Sun' => date('m/d/Y', strtotime($today . " +6 days")));
                            break;
                        case "Tue":
                            $week = array('Mon' => date('m/d/Y', strtotime($today . " -1 days")), 'Tue' => $today, 'Wed' => date('m/d/Y', strtotime($today . " +1 days")), 'Thu' => date('m/d/Y', strtotime($today . " +2 days")), 'Fri' => date('m/d/Y', strtotime($today . " +3 days")), 'Sat' => date('m/d/Y', strtotime($today . " +4 days")), 'Sun' => date('m/d/Y', strtotime($today . " +5 days")));
                            break;
                        case "Wed":
                            $week = array('Mon' => date('m/d/Y', strtotime($today . " -2 days")), 'Tue' => date('m/d/Y', strtotime($today . " -1 days")), 'Wed' => $today, 'Thu' => date('m/d/Y', strtotime($today . " +1 days")), 'Fri' => date('m/d/Y', strtotime($today . " +2 days")), 'Sat' => date('m/d/Y', strtotime($today . " +3 days")), 'Sun' => date('m/d/Y', strtotime($today . " +4 days")));
                            break;
                        case "Thu":
                            $week = array('Mon' => date('m/d/Y', strtotime($today . " -3 days")), 'Tue' => date('m/d/Y', strtotime($today . " -2 days")), 'Wed' => date('m/d/Y', strtotime($today . " -1 days")), 'Thu' => $today, 'Fri' => date('m/d/Y', strtotime($today . " +1 days")), 'Sat' => date('m/d/Y', strtotime($today . " +2 days")), 'Sun' => date('m/d/Y', strtotime($today . " +3 days")));
                            break;
                        case "Fri":
                            $week = array('Mon' => date('m/d/Y', strtotime($today . " -4 days")), 'Tue' => date('m/d/Y', strtotime($today . " -3 days")), 'Wed' => date('m/d/Y', strtotime($today . " -2 days")), 'Thu' => date('m/d/Y', strtotime($today . " -1 days")), 'Fri' => $today, 'Sat' => date('m/d/Y', strtotime($today . " +1 days")), 'Sun' => date('m/d/Y', strtotime($today . " +2 days")));
                            break;
                        case "Sat":
                            $week = array('Mon' => date('m/d/Y', strtotime($today . " -5 days")), 'Tue' => date('m/d/Y', strtotime($today . " -4 days")), 'Wed' => date('m/d/Y', strtotime($today . " -3 days")), 'Thu' => date('m/d/Y', strtotime($today . " -2 days")), 'Fri' => date('m/d/Y', strtotime($today . " -1 days")), 'Sat' => $today, 'Sun' => date('m/d/Y', strtotime($today . " +1 days")));
                            break;
                        case "Sun":
                            $week = array('Mon' => date('m/d/Y', strtotime($today . " -6 days")), 'Tue' => date('m/d/Y', strtotime($today . " -5 days")), 'Wed' => date('m/d/Y', strtotime($today . " -4 days")), 'Thu' => date('m/d/Y', strtotime($today . " -3 days")), 'Fri' => date('m/d/Y', strtotime($today . " -2 days")), 'Sat' => date('m/d/Y', strtotime($today . " -1 days")), 'Sun' => $today);
                            break;
                    }
                    $auc_time = array();
                    foreach ($date_lots as $date_lot) {
                        foreach ($week as $item) {
                            if ($item == date('m/d/Y', strtotime($date_lot['auc_date']))) {
                                $tmp_date = date('H:i', strtotime($date_lot['auc_date']));
                                if (!in_array($tmp_date, $auc_time, true)) {
                                    array_push($auc_time, $tmp_date);
                                }
                            }
                        }
                    }
                    sort($auc_time);
                    ?>
                    <?php if (count($auc_time) == 0): ?>
                        <h1>This week, no auctions are planned</h1>
                    <?php else: ?>
                        <table id="auction_list">
                            <tr>
                                <th>Auction Time</th>
                                <th>Monday<br><?= $week['Mon'] ?></th>
                                <th>Tuesday<br><?= $week['Tue'] ?></th>
                                <th>Wednesday<br><?= $week['Wed'] ?></th>
                                <th>Thursday<br><?= $week['Thu'] ?></th>
                                <th>Friday<br><?= $week['Fri'] ?></th>
                                <th>Saturday<br><?= $week['Sat'] ?></th>
                                <th>Sunday<br><?= $week['Sun'] ?></th>
                            </tr>

                            <?php foreach ($auc_time as $value_time): ?>


                                <tr class="row100 body">
                                    <td><?= $value_time ?></td>
                                    <?php foreach ($week as $item): ?>
                                        <td>
                                            <div class="">
                                                <ul>
                                                    <?php foreach ($date_lots as $date_lot):
                                                        if ($item == date('m/d/Y', strtotime($date_lot['auc_date'])) && $value_time == date('H:i', strtotime($date_lot['auc_date']))):?>
                                                            <li>
                                                                <a href="<?= Url::toRoute(['page/frame-auction-real-time', 'id' => $date_lot['id']]); ?>"><?= $date_lot['location'] ?></a>
                                                            </li>
                                                        <?php endif ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </td>
                                    <?php endforeach; ?>
                                </tr>

                            <?php endforeach; ?>

                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!--END: Список-->
    </div>
    <div class="clearfix"></div>
</div>