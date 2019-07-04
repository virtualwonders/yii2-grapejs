<?php

namespace virtualwonders\grapejs;

use yii\web\AssetBundle;

/**
 * Main asset bundle.
 */
class GrapeJsAsset extends AssetBundle
{
    public $sourcePath = '@virtualwonders/grapejs';
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