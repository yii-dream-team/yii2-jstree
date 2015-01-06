# Yii2 jsTree component #

jsTree is jquery plugin, that provides interactive trees. It is absolutely free, open source 
and distributed under the MIT license. jsTree is easily extendable, themable and configurable, 
it supports HTML & JSON data sources and AJAX loading.

This package allows you to integrate jsTree jQuery plugin into your project in a few minutes.

## Installation ##

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

    php composer.phar require --prefer-dist yii-dream-team/yii2-jstree "*"

or add

    "yii-dream-team/yii2-jstree": "*"

to the `require` section of your composer.json.

## Usage ##

    <?= \yiidreamteam\jstree\JsTree::widget([
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
                    'name' => 'foobar',
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

* [Official site](http://yiidreamteam.com/yii2/jstree)
* [Source code on GitHub](https://github.com/yii-dream-team/yii2-jstree)
* [Composer package on Packagist](https://packagist.org/packages/yii-dream-team/yii2-jstree)
* [jsTree official site](http://www.jstree.com/)
* [jsTree on GitHub](https://github.com/vakata/jstree)
