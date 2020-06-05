<?php

/**
 * Write Asset for Echarts.
 */

namespace frontend\assets;

use yii\web\AssetBundle;

class EchartsAsset extends AssetBundle
{
	public $sourcePath = '@bower/echarts';
    public $js = [
        'vendor/bower/echarts/src/echarts.js',
        'echarts.js',
    ];
}