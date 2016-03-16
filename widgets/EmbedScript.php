<?php

namespace sheillendra\embedscript\widgets;

use Yii;
use yii\base\Widget;

class EmbedScript extends Widget {

    public $componentName = 'embedScript';
    private $_services;

    public function init() {
        parent::init();
    }

    public function run() {
        foreach ($this->getServices() as $k => $v) {
            $this->registerScript($v->getScript());
        }
    }

    protected function defaultServices() {
        $collection = Yii::$app->get($this->componentName);

        return $collection->getServices();
    }

    public function getServices() {
        if ($this->_services === null) {
            $this->_services = $this->defaultServices();
        }

        return $this->_services;
    }

    protected function registerScript($script) {
        if ($script) {
            $view = $this->getView();
            $view->registerJs($script, $view::POS_READY, 'embed-script');
        }
    }

}
