# case-monster
Small examples how to tackle with case monsters with php's dynamic properties.

## Branch master
Master branch example presents Service class without inheritance. 

## Branch servicebase
Servicebase branch example presents Service class inherited from ServiceBase.

### Example master
    <?php

    require_once('Service.php');

    $params = array(1, 2, 3, 4, 5);

    $service = new Service('test'); // ServiceTest

    $object = $service->get_service($params);
    $object->do_service();

### Example servicebase
    <?php

    require_once('Service.php');
    $params = array(1, 2, 3, 4, 5);

    $service = new Service('test', $params); // ServiceTest
    $service->do_service();
