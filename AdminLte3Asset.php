<?php

namespace dakodig\template;

use yii\web\AssetBundle as BaseAdminLteAsset;

/**
 * This is just an example.
 */
class AdminLte3Asset extends BaseAdminLteAsset {

    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/adminlte.min.css',
    ];
    public $js = [
        'js/adminlte.min.js',
        'js/pages/dashboard.js',
        'js/pages/dashboard2.js',
        'js/pages/dashboard3.js',
        'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];

}
