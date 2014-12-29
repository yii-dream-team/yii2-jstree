# Yii2 JsTree Component #

jsTree is jquery plugin, that provides interactive trees. It is absolutely free, open source 
and distributed under the MIT license. jsTree is easily extendable, themable and configurable, 
it supports HTML & JSON data sources and AJAX loading.

### Installation ###

    composer require "yii-dream-team/yii2-jstree:*"

### Usage ###

    <?= yiidreamteam\jstree\JsTree::widget([
        'containerOptions' => [
            'class' => 'data-tree',
        ],
        'jsOptions' => [
            'core' => [
                'multiple' => false,
                'data' => [
                    'url' => \yii\helpers\Url::to(['ajax/tree']),
                ],
                'themes' => [
                    'theme' => 'foobar',
                    'url' => "/themes/foobar/js/jstree3/style.css",
                    'dots' => true,
                    'icons' => false,
                ]
            ],
        ]
    ]) ?>

## Licence ##

MIT
    
## Links ##

* [JsTree official site](http://www.jstree.com/)
* [JsTree on GitHub](https://github.com/vakata/jstree)
* [Yii2 JsTree on GitHub](https://github.com/yii-dream-team/yii2-jstree)
* [Yii2 JsTree on Packagist](https://packagist.org/packages/yii-dream-team/yii2-jstree)