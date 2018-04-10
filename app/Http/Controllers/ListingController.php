<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ListingController extends Controller
{
    public function index($view, $parameters,Request $request)
    {
        //Getting parameters 
        $apiKey = '&key=bVrLNhG2U1aFCKuix97RdsQyIfEnXPpl8jcSvzZO';

        $location = $request->input('location');
        if(is_numeric($location)){
            $location = '&zip=' . $location;
        }else{
            $location = '&city_neighborhood=chicago:' . $location;
        }
        //$sortParameter = explode("-", $sort);
        $sort = '1';
        $page = '1';
        $sortName = ""; 
        $sortDir = "";

        //building the url for the API request
        $searchParameters = 'detail_level=2&page_count=20&page_index=' . $page . $location . '&sort_name=' . $sortName . '&sort_dir=' . $sortDir;
        $searchArguments = '';

        //Making the API request
        $client = new Client();
        $res = $client->request('POST', 'https://www.yougotlistings.com/api/rentals/search.php?' . $searchParameters .  $apiKey);
        $xml = $res->getBody();
        $xml = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $response = json_decode($json, TRUE);


        if($response['Total'] > 0){
            $pages = ceil($response['Total'] / 20);
            $listings = $response['Listings']['Listing'];
        }else{
            $listings = 0;
            $pages = 0;
        }

        //
        if($view == 'list') {
            $viewType = 'pages.listings-list';
            $view = 'list';
        }else{
            $viewType = 'pages.listings-grid';
            $view = 'grid';
        }

        return view($viewType, [
            'view' => $view,
            'sort' => $sort,
            'pages' =>  $pages,
            'pageIndex' =>  $page,
            'urlParameters' => $request->getQueryString(),
            'location' => $location,
            'listings' => $listings,
        ]);
    }
    public function search($view, $search)
    {

    }
}
