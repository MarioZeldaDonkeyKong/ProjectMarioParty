<?php

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/create', function() {
   return view('create');
});

Route::get('/payments/create', 'PaymentsController@create');
Route::post('/payments/store', 'PaymentsController@storePayment');

Route::get('/payments/payRequest', 'PaymentsController@payRequest');
Route::post('/pay', 'PaymentsController@pay');

// Authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
