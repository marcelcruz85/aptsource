<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ListingController extends Controller
{
    public function index()
    {

        $searchParameters = 'detail_level=2&page_count=8';
        $response = $this->apiRequest($searchParameters);
        return view('pages.index', [            
            'listings' => $response['Total'],
            'listings' => $response['Listings']['Listing'],
        ]);
    }
    

    public function details($listing_id)
    {
        
        $searchParameters = 'listing_id=' . $listing_id;
        $response = $this->apiRequest($searchParameters);

        //nearby properties
        $nearby = $response['Listings']['Listing']['zip'];
        $searchParameters = 'page_count=5&zip=' . $nearby;
        $nearby = $this->apiRequest($searchParameters);

        //return view('pages.details');
        return view('pages.details', [  
            'nearby' => $nearby['Listings']['Listing'],
            'listing' => $response['Listings']['Listing'],
        ]);
    }


    public function search($view, $parameters,Request $request)
    {
        //Getting parameters 

        //location
        $location = $request->input('location');
        if($location == ""){
            $rentLocation = '';
        }else if(is_numeric($location) && strlen($location) == 5 ){
            $rentLocation = '&zip=' . $location;
        }else{
            $rentLocation = '&city_neighborhood=chicago:' . $location;
        }

        //Rent range
        $minRent = $request->input('min-rent');
        $minRent = '&min_rent=' . $minRent;

        $maxRent = $request->input('max-rent');
        $maxRent = '&max_rent=' . $maxRent;

        //Rent range
        $minSize = $request->input('min-size');
        $minSize = '&square_footage_min=' . $minSize;
        
        $maxSize = $request->input('max-size');
        $maxSize = '&square_footage_max=' . $maxSize;

        //Beds
        $beds = $request->input('beds');
        $beds = '&beds=' . $beds;

        //Baths
        $baths = $request->input('baths');
        $baths = '&baths=' . $baths;

        //$sortParameter = explode("-", $sort);
        $sort = '1';
        $page = '1';
        $sortName = ""; 
        $sortDir = "";

        //building the url for the API request
        $searchParameters = 'include_mls=1&detail_level=2&page_count=20&page_index=' . $page . $rentLocation . $minRent . $maxRent . $minSize . $maxSize . $beds . $baths . '&sort_name=' . $sortName . '&sort_dir=' . $sortDir;
        $response = $this->apiRequest($searchParameters);

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
    public function apiRequest($searchParameters)
    {
        
        $apiKey = '&key=bVrLNhG2U1aFCKuix97RdsQyIfEnXPpl8jcSvzZO';

                //Making the API request
                $client = new Client();
                $res = $client->request('POST', 'https://www.yougotlistings.com/api/rentals/search.php?' . $searchParameters .  $apiKey);
                $xml = $res->getBody();
                $xml = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
                $json = json_encode($xml);
                $response = json_decode($json, TRUE);

        return $response;
    }
}
