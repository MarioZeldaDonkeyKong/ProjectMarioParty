<?php

Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/create', function() {
   return view('create');
});

Route::get('/payment', 'PaymentController@index');

Route::get('/payRequest', 'PaymentController@payRequest');

Route::post('/pay', 'PaymentController@pay');

Route::post('/payment', 'PaymentController@store'); // Storing a new resource


// Projects Controller, Tasks Controller, Users Controller
