<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
<<<<<<< HEAD
Route::resource('vimeoapi','VimeoApiController');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/sql',[
	'as' => 'sql',
	'uses'=> 'SlideShareController@inBD'
]);


Route::post('/slide', [
	'as' => 'slide.getTest',
	'uses' => 'SlideShareController@getAPI'
]);
Route::post('/vimeo/adaugare_favorite', [
	'as' => 'vimeo.adaugare_favorite',
	'uses' => 'VimeoController@adaugare_favorite'
]);
=======

Route::get('/', function () {
    return view('welcome');
});
Route::get('/slide', function () {
    return view('welcome');
});
Route::post('/slideSi', [
	'as' => 'slide.api.simplu',
	'uses' => 'SlideShareController@cautaSimpluSlide'
]);
Route::get('/slideAv',function () {
    return view('slides.avansat');
});
Route::post('/slideAv', [
	'as' => 'slide.api.av',
	'uses' => 'SlideShareController@cautaAvansatSlide'
]);

>>>>>>> 944bbd5400bacdb48068de14cd4b21bbb6408253
Route::post('/vimeo', [
	'as' => 'vimeo.api',
	'uses' => 'VimeoController@getAPI'
]);
<<<<<<< HEAD

Route::get('/vimeo', function () {
    return view('vimeo.index');
});
Route::get('test', function () {
    return view('slides.index');
});
Route::auth();

Route::get('/home', 'HomeController@index');
=======
Route::get('/vimeo', function () {
    return view('vimeo.index');
});

Route::get('/Cristi', function () {
    return view('welcome');
});    
Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('/slideapi/getAll','SlideApiController@index');

Route::resource('/slideapi/getApi','SlideApiController@get');

Route::get('/documentation', function () {
    return view('documentation');
});
>>>>>>> 944bbd5400bacdb48068de14cd4b21bbb6408253
