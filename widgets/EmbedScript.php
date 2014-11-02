<?php
namespace sheillendra\seo\widgets;

use Yii;
use yii\base\Widget;

class EmbedScript extends Widget {
    
    public $seoCollection = 'seoCollection';
    private $_services;
    
    public function init (){
        parent::init();
    }
    
    public function run(){
        foreach($this->getServices() as $k=>$v){
            $this->registerScript($v->getScript()); 
        }
    }
    
    protected function defaultServices()
    {
        $collection = Yii::$app->get($this->seoCollection);
    
        return $collection->getServices();
    }
    
    public function getServices()
    {
        if ($this->_services === null) {
            $this->_services = $this->defaultServices();
        }
    
        return $this->_services;
    }
    
    protected function registerScript($script) {
        $view = $this->getView();
        $view->registerJs($script,$view::POS_READY,'googleAnalytics');
    }
}