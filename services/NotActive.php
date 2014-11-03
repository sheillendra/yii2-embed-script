<?php
namespace sheillendra\seo\services;

use yii\base\Component;

class NotActive extends Component {
    public $id;
    public $trackerId;
    public $domain='auto';
    
    public function getScript(){
        return '';
    }
} 