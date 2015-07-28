<?php

class ServiceTest extends ServiceBase {
    private $params = array();

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function do_service()
    {
        foreach($this->params as $val)
            echo $val . PHP_EOL;
    }
}
