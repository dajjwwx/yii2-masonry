<?php

namespace dajjwwx\masonry;

use yii\web\AssetBundle;

/**
 * @link http://blog.yuekegu.com
 * @author dajjwwx <dajjwwx@163.com> 

 */

class ImagesLoadedAsset extends AssetBundle
{
    public $sourcePath = '@bower/imagesloaded';

    public $css = [];
    
    public $js = [
            'imagesloaded.pkgd.min.js'
    ];

    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
