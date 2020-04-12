<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	 public function getNearVenues($cityname){
		 $clientId = env('FSQR_CLIENT_ID');
		 $clientSecret = env('FSQR_CLIENT_SECRET');
		 $apiUrl = env('FSQR_API_URL');	
		 $date = date('Ymd');

		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "$apiUrl/venues/search?near=$cityname-JP&limit=5&v=$date&client_secret=$clientSecret&client_id=$clientId&categoryId=4deefb944765f83613cdba6e",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_VERBOSE => true,
		  CURLOPT_SSL_VERIFYHOST => false,
		  CURLOPT_SSL_VERIFYPEER => false,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(

		  ),
		));

		$response = curl_exec($curl);
		$res = json_decode($response, true);		
		curl_close($curl);
		#echo '<pre>'; print_r($res);echo '</pre>';exit;		
		return $res;
		 
	 }
	 
	 public function getVenueDetails($venueId){
		 $clientId = env('FSQR_CLIENT_ID');
		 $clientSecret = env('FSQR_CLIENT_SECRET');
		 $apiUrl = env('FSQR_API_URL');	
		 $date = date('Ymd');
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "$apiUrl/venues/$venueId?v=$date&client_secret=$clientSecret&client_id=$clientId",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_VERBOSE => true,
		  CURLOPT_SSL_VERIFYHOST => false,
		  CURLOPT_SSL_VERIFYPEER => false,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(

		  ),
		));

		$response = curl_exec($curl);
		$res = json_decode($response, true);	
    #echo '<pre>'; print_r($res);echo '</pre>';exit;		
		curl_close($curl);
		return $res;
		 
	 }
	 
	 public function getVenueForecast($lng, $lat){
		 $appId = env('OWTHR_API_KEY');
		 $apiUrl = env('OWTHR_API_URL');
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "$apiUrl/onecall?lat=$lat&lon=$lng&cnt=1&appid=$appId&units=imperial",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_VERBOSE => true,
		  CURLOPT_SSL_VERIFYHOST => false,
		  CURLOPT_SSL_VERIFYPEER => false,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(

		  ),
		));

		$response = curl_exec($curl);
		$res = json_decode($response, true);	
    #echo '<pre>'; print_r($res['daily'] );echo '</pre>';exit;		
		curl_close($curl);
		return $res;
		 
	 }
	 
	 
	 
	 
}
