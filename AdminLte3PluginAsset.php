<?php

namespace dakodig\template;

use yii\web\AssetBundle as BaseAdminLteAsset;

/**
 * This is just an example.
 */
class AdminLte3PluginAsset extends BaseAdminLteAsset {

    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
        '/fontawesome-free/css/all.min.css',
        '/chart.js/Chart.css',
    ];
    public $js = [
        '/bootstrap/js/bootstrap.js',
        '/chart.js/Chart.js',
    ];

}
