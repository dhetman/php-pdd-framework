<?php

use League\Container\Container;
use League\Container\ContainerInterface;
use League\Route\RouteCollection;

$router = new RouteCollection(
	isset($container) && $container instanceof ContainerInterface ? $container : new Container
);

$router->get('/', 'dhetman\Template\Controller\MainController::helloWorld');

return $router;

?>