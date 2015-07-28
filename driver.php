<?php

require_once('Service.php');

$params = array(1, 2, 3, 4, 5);

/**
 * Not bad idea to extend even Service from ServiceBase
 * and implement abstract do_service which would then
 * create the object and compute.
 * Example:
 * $service = new Service('test');
 * $service->do_service($params);
 * // behind the scenes ServiceTest::do_service would be called.
 * Impl this on second branch
 */
$service = new Service('test'); // ServiceTest

$object = $service->get_service($params);
$object->do_service();
