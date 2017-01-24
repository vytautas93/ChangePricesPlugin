<?php
 
namespace ChangePricesPlugin\Controllers;
 
use Plenty\Modules\Item\Item\Contracts\ItemRepositoryContract;
/*use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;*/

/*use Plenty\Modules\Item\Item\Contracts*/
use Plenty\Plugin\Http\Request;
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
    }
    
    public function getTime()
    {
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://change-prices-plugin-services-sakalauskas.c9users.io/ChangePricesPluginServices/public/getTime/3',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);
        
        $result = [];
        $result['time'] = $resp;
        return $twig->render('ChangePricesPlugin::content.hello',$result);
        
        
        
        
      /*  $response = file_get_contents ( '' );
        if($response) 
        {
            $result = [];
            $result['time'] = $this->itemRepository->show($itemId,$columns,$lang);
            return $twig->render('ChangePricesPlugin::content.hello',$result);
        }*/
    }
    
    
    /*public function getItems(Twig $twig):string
    {
        return $twig->render('ChangePricesPlugin::content.hello');
    }*/
}