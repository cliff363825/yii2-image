<?php
namespace cliff363825\image;

use yii\web\AssetBundle;

class EasyImageAsset extends AssetBundle
{
    public $sourcePath = '@cliff363825/image/assets';
    public $js = [
        'retina.min.js',
    ];
} 