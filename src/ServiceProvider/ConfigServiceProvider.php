<?php 

namespace dhetman\Template\ServiceProvider;

use League\Container\ServiceProvider\AbstractServiceProvider;

class ConfigServiceProvider extends AbstractServiceProvider
{
	protected $provides = ['config'];

	public function register()
	{
		$this->getContainer()->share('config', function () {
			return [
				'base_url' => $_ENV['BASE_URL']
			];
		});

	}
}



?>
