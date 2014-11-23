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
        $id = ArrayHelper::getValue($this->containerOptions, 'id', $this->getId());
        $this->containerOptions['id'] = $id;
        $jsOptions = Json::encode($this->jsOptions);
        $this->getView()->registerJs("$('#{$id}').jstree({$jsOptions});");
        echo Html::tag('div', '', $this->containerOptions);
    }
}