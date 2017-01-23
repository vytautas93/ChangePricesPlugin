<?php
 
namespace ChangePricesPlugin\Controllers;
 
/*use Plenty\Modules\Item\Item\Contracts\ItemRepositoryContract;*/
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;

/*use Plenty\Modules\Item\Item\Contracts*/
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
    
    public function showItem(Twig $twig,$itemID){
        $itemId = 181;
        $columns = ["name1"];
        $lang = 'en';
        $result = [];
        $result['res'] = $this->itemRepository->show($itemId,$columns,$lang);
        
        return $twig->render('ChangePricesPlugin::content.hello',$result);
    }
    
    
    /*public function getItems(Twig $twig):string
    {
        return $twig->render('ChangePricesPlugin::content.hello');
    }*/
}