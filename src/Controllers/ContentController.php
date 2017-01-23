<?php
 
namespace ChangePricesPlugin\Controllers;
 
 
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
 
class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('ChangePricesPlugin::content.hello');
    }
}