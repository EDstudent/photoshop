<?php

Route::get('/', 'EventsController@index');

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController');

//Offer 2gr
Route::get('/offer', 'OffersController@index');
Route::post('/offer', 'OffersController@store');

//Product 1gr
Route::get('/product/create', 'ProductController@create');
Route::post('/product/create', 'ProductController@store');
//Product 2gr
Route::get('/product', 'ProductController@index');


//Lang 2gr
Route::get('lang/{locale}','LanguageController');

//Role 1gr
Route::get('/role','RoleController@index');
Route::get('/role/delete/{id}','RoleController@destroy');
Route::post('/role','RoleController@update');



Route::get('/search', 'SearchController@getSearch');
Route::post('/search', 'SearchController@postSearch');
