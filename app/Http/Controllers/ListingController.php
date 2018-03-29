<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ListingController extends Controller
{
    public function index($criteria)
    {
        $client = new Client();
        $res = $client->request('POST', 'https://www.yougotlistings.com/api/rentals/search.php?key=bVrLNhG2U1aFCKuix97RdsQyIfEnXPpl8jcSvzZO&listing_id=' . $criteria);

        $xml = $res->getBody();
        $xml = simplexml_load_string($xml);
        $json = json_encode($xml);
        $response = json_decode($json, FALSE);
    
        return view('pages.dev', [
            'total' => $response->Total,
            'listings' => $response->Listings,
        ]);
    }
}
