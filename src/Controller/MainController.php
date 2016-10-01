<?php
namespace dhetman\Template\Controller;

use dhetman\Template\Contract\ConfigAwareInterface;
use dhetman\Template\Contract\ConfigAwareTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class MainController implements ConfigAwareInterface
{
    use ConfigAwareTrait;

    public function helloWorld(ServerRequestInterface $request, ResponseInterface $response)
    {
    	$config = $this->getConfig();

    	$response->getBody()->write(
    		$config['base_url']
    	);
    }
}


?>