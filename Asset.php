<?php

namespace panix\asset\bootstrap\notify;

use yii\web\AssetBundle;

class Asset extends AssetBundle {

    public $sourcePath = '@bower/remarkable-bootstrap-notify';

    public $js = [
        'bootstrap-notify.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
