<?php

namespace dajjwwx\masonry;

use yii\web\AssetBundle;

/**
 * @link http://blog.yuekegu.com
 * @author dajjwwx <dajjwwx@163.com> 
 */

class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@bower/masonry/dist';

    public $css = [];
    
    public $js = [
        'masonry.pkgd.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
