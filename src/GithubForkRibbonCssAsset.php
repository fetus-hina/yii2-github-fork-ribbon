<?php
/**
 * @copyright Copyright (C) 2016 AIZAWA Hina
 * @license https://github.com/fetus-hina/yii2-github-fork-ribbon/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

namespace jp3cki\yii2\githubForkRibbon;

use yii\web\AssetBundle;

class GithubForkRibbonCssAsset extends AssetBundle
{
    public $sourcePath = '@bower/github-fork-ribbon-css';
    public $css = [
        'gh-fork-ribbon.css',
        'gh-fork-ribbon.ie.css' => [
            'condition' => 'lt IE 9',
        ],
    ];
}
