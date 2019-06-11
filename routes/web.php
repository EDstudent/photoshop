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

Route::get('/', 'EventsController@index');
Route::get('/logout',Auth::logout());


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 
//Route::get('admin', 'AdminController');

//Offer 2gr
Route::get('/offer', 'OffersController@create');
Route::post('/offer', 'OffersController@store');

//Product 1gr
Route::get('/create_product', 'CreateProductController@create');
Route::post('/create_product', 'CreateProductController@store');

//Lang 2gr
Route::get('lang/{locale}','LanguageController');


//Route::get('events/search','EventsController@getSearch');
//Route::post('events/search','EventsController@postSearch');



/*Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'SpecialController@index');
Route::get('/users/update','SpecialController@update');

Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);*/
