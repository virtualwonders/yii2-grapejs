GrapesJS
========
An asset bundle for the [GrapesJS](https://grapesjs.com/) web builder framework.

Installation
------------

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist virtualwonders/yii2-grapesjs "*"
```

or add

```
"virtualwonders/yii2-grapesjs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Add in the view as follows:

```php
use virtualwonders\grapesjs\GrapesJsAsset;

GrapesJsAsset::register($this);
```

It can also be added as a dependency on your **AppAsset**, as follows:

```php
public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap4\BootstrapAsset',
    'yii\bootstrap4\BootstrapPluginAsset',
    'virtualwonders\fontawesome\FontAwesomeAsset',
    'virtualwonders\grapesjs\GrapesJsAsset'
];
```
