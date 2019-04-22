<?php

namespace panix\asset\bootstrap\notify;

use yii\web\AssetBundle;

class CartAsset extends AssetBundle {

    public $sourcePath = '@bower/assets';

    public $js = [
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
