<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//CarSearchByStatus

use Illuminate\Support\Facades\Route;

Route::post('login', 'API\UserApiController@login');
Route::post('register', 'API\UserApiController@register');
Route::post('addcarApi', 'API\UserApiController@addcar');
Route::post('addjeweleryApi','API\UserApiController@addjewelry');
Route::post('addpropertyApi','API\UserApiController@addproperty');
Route::post('CarSearch','API\UserApiController@CarSearch');//1
Route::post('CarSearchByPrice','API\UserApiController@CarSearchByPrice');//2
Route::post('CarSearchByModel','API\UserApiController@CarSearchByModel');//3
Route::post('CarSearchByStatus','API\UserApiController@CarSearchByStatus');//4
Route::post('addhighvalueApi','API\UserApiController@addhighvalue');
Route::post('addaddvichlesApi','API\UserApiController@addvichles');
Route::get('getcarApi', 'API\UserApiController@listCars');
Route::get('getMazadApi', 'API\UserApiController@ListMazadat');
Route::get('getJewelryApi', 'API\UserApiController@listjewelery');
Route::get('getpropApi', 'API\UserApiController@listproperty');
Route::get('getVichleApi', 'API\UserApiController@listvichle');
Route::get('getHighValueApi', 'API\UserApiController@listhighvalue');
Route::get('getCategoryApi', 'API\UserApiController@listCategory');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserApiController@details');
});
Route::post('JewelrySearch','API\UserApiController@JewelrySearch'); /// from here 5
Route::post('JewelrySearchByPrice','API\UserApiController@JewelrySearchByPrice');//6
Route::post('JewelrySearchByMatrial','API\UserApiController@JewelrySearchByMatrial');//7
Route::post('JewelrySearchByGender','API\UserApiController@JewelrySearchByGender');//8
Route::post('HVSearch','API\UserApiController@HVSearch');//9
Route::post('HVSearchByPrice','API\UserApiController@HVSearchByPrice');//10
Route::post('HVSearchByname','API\UserApiController@HVSearchByname');//11
Route::post('PropertySearch','API\UserApiController@PropertySearch');//12
Route::post('PropertySearchByCity','API\UserApiController@PropertySearchByCity');//13
Route::post('PropertySearchByRental','API\UserApiController@PropertySearchByRental');//14
Route::post('PropertySearchByType','API\UserApiController@PropertySearchByType');//15
Route::post('PropertySearchByFurnished','API\UserApiController@PropertySearchByFurnished');//16
Route::post('PropertySearchByPrice','API\UserApiController@PropertySearchByPrice');//17
Route::post('PropertySearchBySize','API\UserApiController@PropertySearchBySize');//18
Route::post('VichleSearch','API\UserApiController@VichleSearch');//19
Route::post('VichleSearchByPrice','API\UserApiController@VichleSearchByPrice');//20
Route::post('VichleSearchByModel','API\UserApiController@VichleSearchByModel');//21
Route::post('VichleSearchByStatus','API\UserApiController@VichleSearchByStatus');//22
Route::post('Search','API\UserApiController@Search');

