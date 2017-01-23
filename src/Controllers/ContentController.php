<?php
 
namespace ChangePricesPlugin\Controllers;
 
use Plenty\Modules\Item\Item\Contracts\ItemRepositoryContract; 
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
 
class ContentController extends Controller
{
    /**
     * @var ItemRepositoryContract
     */
    private $itemRepository;
    
    public function __construct(ItemRepositoryContract $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }
    
    public function showItem($itemID){
        print_r($this->itemRepository->show(181));
        return $twig->render('ChangePricesPlugin::content.hello');
        //return $this->itemRepository->show($itemID);
    }
    
    
    /*public function getItems(Twig $twig):string
    {
        return $twig->render('ChangePricesPlugin::content.hello');
    }*/
}