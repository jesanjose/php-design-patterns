<?php
require_once 'service_locator.php';

$locator = new ServiceLocator;
echo $locator->getSampleService()->getFooById(1); // this will output 'foo1'