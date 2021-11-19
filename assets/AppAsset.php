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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'theme/vendors/owl-carousel/css/owl.carousel.min.css',
        'theme/vendors/owl-carousel/css/owl.theme.default.css',
        'theme/vendors/mdi/css/materialdesignicons.min.css',
        'theme/vendors/aos/css/aos.css',
        'theme/css/style.min.css',
    ];
    public $js = [
        //'theme/vendors/jquery/jquery.min.js',
        //'theme/vendors/bootstrap/bootstrap.min.js',
        'theme/vendors/owl-carousel/js/owl.carousel.min.js',
        'theme/vendors/aos/js/aos.js',
        'theme/js/landingpage.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
