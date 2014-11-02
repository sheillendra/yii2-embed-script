<?php
namespace sheillendra\seo;

use Yii;
use yii\base\Component;

class Collection extends Component {
    private $_services = [];
    
    public function setServices(array $services)
    {
        $this->_services = $services;
    }
    
    /**
     * @return ClientInterface[] list of auth clients.
     */
    public function getServices()
    {
        $services = [];
        foreach ($this->_services as $id => $service) {
            $services[$id] = $this->getService($id);
        }
    
        return $services;
    }
    
    /**
     * @param string $id service id.
     * @return ClientInterface auth client instance.
     * @throws InvalidParamException on non existing client request.
     */
    public function getService($id)
    {
        if (!array_key_exists($id, $this->_services)) {
            throw new InvalidParamException("Unknown auth client '{$id}'.");
        }
        if (!is_object($this->_services[$id])) {
            $this->_services[$id] = $this->createService($id, $this->_services[$id]);
        }
    
        return $this->_services[$id];
    }

    public function hasClient($id)
    {
        return array_key_exists($id, $this->_clients);
    }
    
    protected function createService($id, $config)
    {
        $config['id'] = $id;
    
        return Yii::createObject($config);
    }
}