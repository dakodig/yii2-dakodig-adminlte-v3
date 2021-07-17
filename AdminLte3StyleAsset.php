<?php

namespace dakodig\template;

use yii\web\AssetBundle as BaseAdminLteAsset;

/**
 * This is just an example.
 */
class AdminLte3StyleAsset extends BaseAdminLteAsset {

    public $sourcePath = '@vendor/dakodig/template/plugins';
    public $css = [
        'css/dakodig.style.css',
    ];
    public $js = [
    ];

}
