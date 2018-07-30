<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \GuzzleHttp\Client;

class ApiController extends Controller
{
    public function request(Request $request) {
    	// return reseponse()->json($request->all());
    	$http = new Client;

		$response = $http->post(url('/oauth/token'), [
		    'form_params' => [
		        'grant_type' => 'password',
		        'client_id' => '2',
		        'client_secret' => 'PCyxwqobyl7azTDLueryshazup6EFC8Uj4L8lne1',
		        'username' => 'sadye51@example.com',
		        'password' => 'secret',
		        'scope' => '',
		    ],
		]);

		return json_decode((string) $response->getBody(), true);
    }
}
