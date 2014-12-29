<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace yiidreamteam\jstree;

use yii\web\AssetBundle;

class JsTreeBundle extends AssetBundle
{
    /** @var string */
    public $theme = 'default';

    public $sourcePath = '@bower/jstree/dist';
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        $min = !defined('YII_DEBUG');
        $this->js[] = $min ? 'jstree.min.js' : 'jstree.js';
        if ($this->theme != false) {
            $cssFile = $min ? 'style.min.css' : 'style.css';
            $this->css[] = "themes/{$this->theme}/{$cssFile}";
        }

        parent::registerAssetFiles($view);
    }
}