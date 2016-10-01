<?php 

namespace dhetman\Template\Contract;

interface ConfigAwareInterface
{
	public function setConfig(array $config);

	public function getConfig();
}

?>