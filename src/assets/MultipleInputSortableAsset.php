<?php

/**
 * @link https://github.com/websvcPT/yii2-multiple-input
 * @copyright Copyright (c) 2014 unclead
 * @license https://github.com/websvcPT/yii2-multiple-input/blob/master/LICENSE.md
 */

namespace websvc\multipleinput\assets;

use yii\web\AssetBundle;

/**
 * Class MultipleInputAsset
 * @package websvc\multipleinput\assets
 */
class MultipleInputSortableAsset extends AssetBundle
{
    public $depends = [
        'websvc\multipleinput\assets\MultipleInputAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/src/';

        $this->js = [
            YII_DEBUG ? 'js/sortable.js' : 'js/sortable.min.js'
        ];

        $this->css = [
            YII_DEBUG ? 'css/sorting.css' : 'css/sorting.min.css'
        ];

        parent::init();
    }
} 