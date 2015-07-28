<?php
require_once('ServiceBase.php');

/**
 * Manager class. Lists, creates and returns 
 * dynamically objects.
 */
class Service extends ServiceBase {
    private $service;
    private $services = array(
        'test'
    );
    protected $params = array();

    public function __construct($service, $params)
    {
        $this->service = $service;
        $this->params = $params;
    }

    public function do_service()
    {
        $object = $this->get_service($this->params);
        return $object->do_service();
    }

    private function get_service($params)
    {
        if(!in_array($this->service, $this->services))
            return;

        $service_class = get_class($this) . ucfirst($this->service);
        require_once($this->service . '/' . $service_class . '.php');

        if(class_exists($service_class)) {
            return new $service_class($params);
        }
    }
}
