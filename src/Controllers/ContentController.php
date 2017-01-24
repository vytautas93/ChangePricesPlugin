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
    
    public function getTime(Twig $twig)
    {
        $url = 'https://change-prices-plugin-services-sakalauskas.c9users.io/ChangePricesPluginServices/public/getTime/4';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPGET, true);
        curl_setopt(CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($curl);
        curl_close($curl);
        $result = [];
        $result['time']= $resp;
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