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

Route::get('/home', function(){

});



Route::resource('/admin', 'AdminController');
Route::resources([
    'admin' => 'AdminController',
    'home' => 'HomeController',
    'countries' => 'CountryController',
    'locations' => 'LocationController'
]);
Auth::routes();
