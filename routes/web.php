<?php

// Home
Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');

// Payment
Route::get('/payments/', 'PaymentsController@index');
Route::get('/payments/create', 'PaymentsController@create');

// Mollie
Route::get('/payments/payRequest', 'PaymentsController@payRequest');
Route::post('/pay', 'PaymentsController@pay');

// Authentication
Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get('/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get('/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');

