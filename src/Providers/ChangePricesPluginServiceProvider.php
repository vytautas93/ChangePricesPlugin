<?php
 
namespace ChangePricesPlugin\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
 
class ChangePricesPluginServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
 
    public function register()
    {
        $this->getApplication()->register(ChangePricesPluginRouteServiceProvider::class);
    }
}