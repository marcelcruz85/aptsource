<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ListingController extends Controller
{
    public function index()
    {

        $searchParameters = 'detail_level=2&page_count=8&sort_name=updateDate&sort_dir=desc&photo=Y';
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
        $nearby = $response['Listings']['Listing']['Zip'];
        $searchParameters = 'detail_level=2&page_count=5&zip=' . $nearby;        
        $nearby = $this->apiRequest($searchParameters);  
        $listingsNearby = $nearby['Listings']['Listing'] ?? "";

        //return view('pages.details');
        return view('pages.details', [  
            'nearby' =>  $listingsNearby,
            'listing' => $response['Listings']['Listing'],
        ]);
    }


    public function search($view, $sort, $parameters,Request $request)
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

        //Size range
        $minSize = $request->input('min-size');
        $minSize = '&square_footage_min=' . $minSize;
        
        $maxSize = $request->input('max-size');
        $maxSize = '&square_footage_max=' . $maxSize;

        //Available range

        $availableAfter = $request->input('available-after');

        $now = time();
        $availableDate = strtotime($availableAfter);

        if ( $now >= $availableDate ){
            $availableAfter = '&avail_from=01/01/2000';
        }else{
            $availableAfter = '&avail_from=' . $availableAfter;
        }
                
        $availableBefore = $request->input('available-before');
        $availableBefore = '&avail_to=' . $availableBefore;

        //Beds
        $beds = $request->input('beds');
        $beds = '&beds=' . $beds;

        //Baths
        $baths = $request->input('baths');
        $baths = '&baths=' . $baths;

        //parking
        $parking = $request->input('parking');
        $parking = '&parking_spots=' . $parking;

        //Page
        $page = $request->input('page');
        $page = '&page_index=' . $page;

        //Picture
        $picture = $request->input('picture');
        $picture = '&photo=' . $picture;

        //Page count
        $pageCount = $request->input('pagecount');
        if($pageCount != ""){
            $pageCount = '&page_count=' . $pageCount;
        }else{
            $pageCount = '&page_count=20';
        }

        //Sort by
        if($sort != "1"){            
            $sortParameter = explode("-", $sort);
            $sortName = '&sort_name=' . $sortParameter[0]; 
            $sortDir = '&sort_dir=' . $sortParameter[1];    
        } else {            
            $sortName = '&sort_name='; 
            $sortDir = '&sort_dir=';   
        }

        //building the url for the API request
        $searchParameters = 'include_mls=1&detail_level=2' . $page . $pageCount . $availableBefore . $availableAfter . $rentLocation . $minRent . $maxRent . $minSize . $maxSize . $beds . $baths . $parking . $sortName . $sortDir;
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
        }else if($view == 'grid'){
            $viewType = 'pages.listings-grid';
            $view = 'grid';
        }else if($view == 'maps'){
            $viewType = 'pages.listings-maps';
            $view = 'maps';
        }else if($view == 'api'){
            return $response;
        }

        return view($viewType, [
            'now' => $now,
            'available' => $availableDate,
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
