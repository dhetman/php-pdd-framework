<?php 

namespace dhetman\Template\Contract;

trait ConfigAwareTrait
{

	public $config;

	public function setConfig(array $config)
	{
		$this->config = $config;
	}

	public function getConfig()
	{
		return $this->config;
	}
}

?>