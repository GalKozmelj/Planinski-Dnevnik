<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('seznam', function () {
    return view('seznam');
});

Route::get('check_location', function () {
    return view('check_location');
});

Route::get('/refresh', function () {
    return view('home');
});

Route::get('/location/{$loc_name}', function($loc_name){
    $location = Location::where('name', $name)->orWhere('name', 'like', '%'.$name.'%')->first();
    $posts = Post::where('location_id', $location->id)->get();

    return view('profile', ['location' => $location, 'posts' => $posts]);
});


Route::get('/home', 'HomeController@index');



Route::get('/home/post', 'HomeController@findLocation');

Route::post('/profile', 'LocationController@search');

Route::resources([
    'admin' => 'AdminController',
    'countries' => 'CountryController',
    'locations' => 'LocationController',
    'posts' => 'PostController'
]);

Auth::routes();
