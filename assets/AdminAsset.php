<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admTmp/css/material-dashboard.css',
        'admTmp/css/bootstrap-datetimepicker.css',
        'admTmp/css/admin.css',
    ];
    public $js = [
        'admTmp/js/core/popper.min.js',
        'admTmp/js/core/bootstrap-material-design.min.js',
        'admTmp/js/plugins/perfect-scrollbar.jquery.min.js',
        'admTmp/js/plugins/moment.min.js',
        'admTmp/js/plugins/moment-with-locales.min.js',
        'admTmp/js/plugins/bootstrap-datetimepicker.min.js',
        'admTmp/js/material-dashboard.js',
        'admTmp/js/admin.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
