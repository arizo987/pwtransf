<?php
namespace HelloWorldTest\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class HelloWorldRouteServiceProvider
 * @package HelloWorldTest\Providers
 */
class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('hello2', 'HelloWorldTest\Controllers\ContentController@sayHello');
	}

}
