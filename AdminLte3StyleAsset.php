<?php

namespace dakodig\template;

use yii\web\AssetBundle as BaseAdminLteAsset;

/**
 * This is just an example.
 */
class AdminLte3StyleAsset extends BaseAdminLteAsset {

    public $sourcePath = '@vendor/dakodig/yii2-dakodig-adminlte-v3/plugins';
    public $css = [
        'css/style.css',
    ];
    public $js = [
    ];

}
