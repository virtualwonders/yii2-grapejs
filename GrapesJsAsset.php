<?php

namespace virtualwonders\grapesjs;

use yii\web\AssetBundle;

/**
 * Main asset bundle.
 */
class GrapesJsAsset extends AssetBundle
{
    public $sourcePath = '@virtualwonders/grapesjs';
    public $css = [
        'https://unpkg.com/grapesjs/dist/css/grapes.min.css'
    ];
    public $js = [
        'https://unpkg.com/grapesjs'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'virtualwonders\fontawesome\FontAwesomeAsset'
    ];
}