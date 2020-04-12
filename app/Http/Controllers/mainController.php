<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class mainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {    
         return view('cities');

    }
	 public function venue($cityname)
    {   $user = new User;
		$venue =  $user->getNearVenues($cityname);
		#echo '<pre>'; print_r($venue['response']['venues'] );echo '</pre>';exit;
        return view('venue', ['nearvenues' => $venue['response']['venues'], 'city' => $cityname]);

    }
	
	 public function getVenueDetails($id)
    {  
		$user = new User;
		$venue =  $user->getVenueDetails($id);
		$result  = $venue['response']['venue'];
		
		#Get full URL image
		$imgUrl = $result['photos']['groups'][0]['items'][0]['prefix'] . $result['photos']['groups'][0]['items'][0]['width']. 'x' .$result['photos']['groups'][0]['items'][0]['height'] .$result['photos']['groups'][0]['items'][0]['suffix'];

		
		#Get venue weather forecast / unit used emperial
		$lng = $result['location']['lng'];
		$lat = $result['location']['lat'];
		$forcasted = $user->getVenueForecast($lng, $lat);
		
		#echo '<pre>'; print_r( $result['location']['lat'] );echo '</pre>';exit;
        return view('venue-details', ['venue' => $result, 'imgurl'=> $imgUrl, 'forecasted' => $forcasted['daily'] ]);

    }
	
}
