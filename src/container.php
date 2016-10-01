<?php 

use League\Container\Container;

$container = new Container();

$container->addServiceProvider(dhetman\Template\ServiceProvider\ConfigServiceProvider::class);
$container->addServiceProvider(dhetman\Template\ServiceProvider\HttpMessageServiceProvider::class);

$container->inflector(dhetman\Template\Contract\ConfigAwareInterface::class)
		  ->invokeMethod('setConfig', ['config']);

$container->add(dhetman\Template\Controller\MainController::class);

return $container;

 ?>