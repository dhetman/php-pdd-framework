<?php 

namespace dhetman\Template\ServiceProvider;

use League\Container\ServiceProvider\AbstractServiceProvider;

use Zend\Diactoros\ServerRequestFactory;

class HttpMessageServiceProvider extends AbstractServiceProvider
{
	protected $provides = [
		'Zend\Diactoros\Response',
		'Zend\Diactoros\Response\SapiEmitter',
		'Zend\Diactoros\ServerRequest'
	];

	public function register()
	{
		$this->getContainer()->add('Zend\Diactoros\Response');

		$this->getContainer()->share('Zend\Diactoros\Response\SapiEmitter');

		$this->getContainer()->share('Zend\Diactoros\ServerRequest', function () {

			$config = $this->getContainer()->get('config');

			$_SERVER['REQUEST_URI'] = str_replace('/app-template/public', '', $_SERVER['REQUEST_URI']);

			return ServerRequestFactory::fromGlobals();
		});
	}
}

?>