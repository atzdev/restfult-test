<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['prefix' => 'v1'], function() {
	
	//Route::resource('meeting', 'MeetingController');
	Route::resource('meeting', 'MeetingController', [
		'except' => ['create', 'edit']
	]);

	Route::resource('meeting', 'MeetingController', [
		'except' => ['create', 'edit', 'index']
	]);

	Route::resource('meeting/registration', 'RegisterController', [
		'only' => ['store', 'destroy']
	]);

	Route::post('/user/register', [
		'user' => 'AuthController@store'
	]);

	Route::post('/user/signin', [
		'uses' => 'AuthController@signin'
	]);

	

});

/*Route::group(['prefix' => 'v1'], function(){
	Route::get('meeting', function(){
		return 'work';
	});
});*/














