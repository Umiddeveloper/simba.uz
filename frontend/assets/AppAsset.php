<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/bootstrap.min.css',
        '/css/animate.css',
        '/css/swiper.min.css',
        '/css/magnific-popup.css',
        '/css/font.css',
        '/css/font-awesome.min.css',
        '/css/comman.css',
        '/css/style.css',
        '/css/main.css'
    ];
    public $js = [
        '/js/bootstrap.min.js',
        '/js/SmoothScroll.min.js',
        '/js/swiper.min.js',
        '/js/wow.min.js',
        '/js/jquery.magnific-popup.min.js',
        '/js/custom.js',
        '/js/datepicker.min.js',
        '/js/datepicker_moment.min.js',
        '/js/gmap-setup.js',
        '/js/isotope.pkgd.min.js',
        '/js/jquery.gmap.js',
        '/js/jquery.mixitup.min.js',
        '/js/jquery-jvectormap.min.js',
        '/js/jquery-jvectormap-world-mill.js',
        '/js/nice-select.min.js',
        '/js/team_filter_gallery.js',
        '/js/tilt.js',
    ];
    public $depends = [
        YiiAsset::class,
    ];
}
