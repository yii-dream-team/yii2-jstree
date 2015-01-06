<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace yiidreamteam\jstree;

use yii\bootstrap\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

class JsTree extends Widget
{
    public $jsOptions = [];
    public $containerTag = 'div';
    public $containerOptions = [];

    /**
     * @var boolean|string $bundledTheme
     * Set to false to use a custom theme and then set jsOptions['core']['themes'] with theme information.
     * Set to 'default' or 'default-dark' to use one the bundled themes.
     * @see http://www.jstree.com/api/#/?f=$.jstree.defaults.core.themes
     */
    public $bundledTheme = 'default';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $view = $this->getView();
        $bundle = JsTreeBundle::register($view);
        $bundle->theme = $this->bundledTheme;
        if ($this->bundledTheme !== false && !isset($this->jsOptions['core']['themes'])) {
            $this->jsOptions['core']['themes'] = [
                'name' => $this->bundledTheme,
            ];
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $id = ArrayHelper::getValue($this->containerOptions, 'id', $this->getId());
        $this->containerOptions['id'] = $id;
        $jsOptions = Json::encode($this->jsOptions);
        $this->getView()->registerJs("$('#{$id}').jstree({$jsOptions});");
        echo Html::tag('div', '', $this->containerOptions);
    }
}
