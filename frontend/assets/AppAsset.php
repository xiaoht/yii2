<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/css/bootstrap.css',
        'statics/scripts/ionicons/css/ionicons.min.css',
        'statics/scripts/toast/jquery.toast.min.css',
        'statics/scripts/owlcarousel/dist/assets/owl.carousel.min.css',
        'statics/scripts/owlcarousel/dist/assets/owl.theme.default.min.css',
        'statics/scripts/magnific-popup/dist/magnific-popup.css',
        'statics/scripts/sweetalert/dist/sweetalert.css',
        'statics/css/style.css',
        'statics/css/skins/all.css',
    ];
    public $js = [
        'statics/js/jquery.min.js',
        'statics/js/jquery.migrate.js',
        'statics/scripts/bootstrap/bootstrap.min.js',
        'statics/scripts/jquery-number/jquery.number.min.js',
        'statics/scripts/owlcarousel/dist/owl.carousel.min.js',
        'statics/scripts/magnific-popup/dist/jquery.magnific-popup.min.js',
        'statics/scripts/easescroll/jquery.easeScroll.js',
        'statics/scripts/sweetalert/dist/sweetalert.min.js',
        'statics/scripts/toast/jquery.toast.min.js',
        'statics/js/e-magz.js',
    ];
}
