<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ListingController extends Controller
{
    public function index($criteria)
    {
        //$data['squirrel'] = $criteria;
        //return View::make('simple', $data);
        $client = new Client();
        $res = $client->request('POST', 'https://www.yougotlistings.com/api/rentals/search.php?key=bVrLNhG2U1aFCKuix97RdsQyIfEnXPpl8jcSvzZO&listing_id=' . $criteria);
        // $output = $res->getStatusCode();
        
        $xml = $res->getBody();
        $xml = simplexml_load_string($xml);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
    
        return view('pages.dev', [
            'output' => $array,
            'listing' => $array['Listings'],
        ]);
    }
}
