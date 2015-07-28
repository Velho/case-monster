<?php
require_once('ServiceBase.php');

/**
 * Manager class. Lists, creates and returns 
 * dynamically objects.
 */
class Service {
    private $service;
    private $services = array(
        'test'
    );

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function get_service($params)
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
