yii2-seo
========

yii2 search engine optimization

Quick start
===========

Config
------
```
...
'components'=>[
  ...
  'seoCollection'=>[
    'class'=>'sheillendra\seo\Collection',
    'services'=>[
      'googleAnalytics'=>[
        'class'=>'sheillendra\seo\services\GoogleAnalytics',
        'trackerId'=>'UA-XXXXXXXX-X',
      ]
    ]
  ]
  ...
]
...
```

trick for local config, use NotActive for service class
I'm not yet found best way without a condition (if).
```
...
'components'=>[
  ...
  'seoCollection'=>[
    'class'=>'sheillendra\seo\Collection',
    'services'=>[
      'googleAnalytics'=>[
        'class'=>'sheillendra\seo\services\NotActive'
      ]
    ]
  ]
  ...
]
...
```
view / layout
----
```
<?php EmbedScript::widget();?>
```
