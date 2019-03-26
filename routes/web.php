<?php

Route::get('/home', 'PagesController@dashboard');
Route::get('/contact', 'PagesController@contact');

Route::get('/payments/create', 'PaymentsController@create');
Route::post('/payments/store', 'PaymentsController@storePayment');

Route::get('/payments/payRequest', 'PaymentsController@payRequest');
Route::post('/pay', 'PaymentsController@pay');

// Authentication
Auth::routes();
Route::resource('account_numbers','AccountNumbersController')->except('edit', 'update');

Route::get('/', 'DashboardController@index');
