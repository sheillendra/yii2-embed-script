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

view / layout
----
```
<?php EmbedScript::widget();?>
```
