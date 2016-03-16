yii2-embed-script
========

yii2 embed custom script or 3rd party like google tracking and seo or other

Quick start
===========

Config
------
```
...
'components'=>[
  ...
  'embedScript'=>[
    'class'=>'sheillendra\embedscript\Collection',
    'services'=>[
      'googleAnalytics'=>[
        'class'=>'sheillendra\embedscript\services\GoogleAnalytics',
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
  'embedScript'=>[
    'class'=>'sheillendra\embedscript\Collection',
    'services'=>[
      'googleAnalytics'=>[
        'class'=>'sheillendra\embedscript\services\NotActive'
      ]
    ]
  ]
  ...
]
...
```
using as widget in view / layout
----
```
<?php use sheillendra\embedscript\widgets\EmbedScript ?>

<?php EmbedScript::widget();?>
```

It can also be used as a bootstrap module so as not to bother applying widget in any layout or view.
---
```
#config
...
'bootstrap' => ['log','embedscript'],
'modules' => [
    'embedscript' => ['class'=>'sheillendra\embedscript\Module']
]
...
```
