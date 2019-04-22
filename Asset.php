<?php

namespace panix\asset\bootstrap\notify;

use yii\web\View;
use yii\web\AssetBundle;

/**
 * Class Asset
 * @package panix\asset\bootstrap\notify
 */
class Asset extends AssetBundle
{

    public $jsOptions = [
        'position' => View::POS_END
    ];

    public $sourcePath = '@bower/remarkable-bootstrap-notify';

    public $js = [
        'bootstrap-notify.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
