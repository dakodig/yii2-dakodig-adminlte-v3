<?php

namespace dakodig\template;

use yii\web\AssetBundle as BaseAdminLteAsset;

/**
 * This is just an example.
 */
class AdminLte3PluginAsset extends BaseAdminLteAsset {

    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
        'fontawesome-free/css/all.min.css',
        'chart.js/Chart.css',
        'toastr/toastr.css',
        'overlayScrollbars/css/OverlayScrollbars.min.css'
    ];
    public $js = [
        'bootstrap/js/bootstrap.js',
        'chart.js/Chart.js',
        'jquery/jquery.min.js',
        'jquery/jquery.slim.js',
        'toastr/toastr.min.js',
        'overlayScrollbars/js/jquery.overlayScrollbars.min.js'
    ];

}
