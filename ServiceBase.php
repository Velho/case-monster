<?php

/**
 * Declares abstract base class for Services.
 */
abstract class ServiceBase {
    protected $params;

    public function __construct()
    {}

    abstract public function do_service();
}
