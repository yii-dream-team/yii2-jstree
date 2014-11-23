<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace yiidreamteam\jstree;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class JsTree extends Widget
{
    public $jsOptions = [];
    public $containerTag = 'div';
    public $containerOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $view = $this->getView();
        JsTreeBundle::register($view);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $id = $this->containerOptions['id'] ?: $this->getId();
        $this->containerOptions['id'] = $id;
        $options = Json::encode($this->options);
        $this->getView()->registerJs("$('#{$id}').jstree({$options});");
        echo Html::tag('div', '', $this->containerOptions);
    }
}