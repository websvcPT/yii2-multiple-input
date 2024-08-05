<?php

/**
 * @link https://github.com/websvcPR/yii2-multiple-input
 * @copyright Copyright (c) 2014 unclead
 * @license https://github.com/websvcPT/yii2-multiple-input/blob/master/LICENSE.md
 */

namespace websvc\multipleinput\assets;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package websvc\multipleinput\assets
 */
class FontAwesomeAsset extends AssetBundle
{
    public $depends = [];

    public $css = [
        [
            '//use.fontawesome.com/releases/v5.2.0/css/all.css',
            'type' => 'text/css',
            'integrity' => 'sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ',
            'crossorigin' => 'anonymous',
            'media' => 'all',
            'id' => 'font-awesome',
            'rel' => 'stylesheet'
        ],
    ];
}
