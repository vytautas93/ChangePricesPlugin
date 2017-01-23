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
        $result = [];
        $result['res'] = $this->itemRepository->show(181);
        
        return $twig->render('ChangePricesPlugin::content.hello',$result);
    }
    
    
    /*public function getItems(Twig $twig):string
    {
        return $twig->render('ChangePricesPlugin::content.hello');
    }*/
}