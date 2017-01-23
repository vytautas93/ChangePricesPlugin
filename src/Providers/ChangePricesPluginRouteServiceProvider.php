<?php
 
namespace ChangePricesPlugin\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class ChangePricesPluginRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','ChangePricesPlugin\Controllers\ContentController@sayHello');
    }
}